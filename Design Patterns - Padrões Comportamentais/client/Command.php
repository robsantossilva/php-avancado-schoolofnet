<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Command\TurnOnCommand;
use SON\Command\TurnOffCommand;
use SON\Command\TurnOffReceiver;
use SON\Command\TurnOnReceiver;

function invoker(string $commandToExecute) {
    $commands = [
        TurnOnCommand::class => TurnOnReceiver::class,
        TurnOffCommand::class => TurnOffReceiver::class,
    ];

    $similar = 0;
    $finalCommand = null;
    $finalReceiver = null;
    foreach ($commands as $command => $receiver) {
        similar_text($commandToExecute, $command, $percent);
        //var_dump($commandToExecute, $command, $percent);
        if ($percent > $similar and $percent > 20) {
            $similar = $percent;
            $finalCommand = $command;
            $finalReceiver = $receiver;
        }
    }

    if (!$finalCommand) {
        throw new Exception("Command not found");
    }
    return (new $finalCommand(new $finalReceiver))->execute();
}

if (empty($argv[1])) {
    throw new Exception("Command required");
}

try {
    echo invoker($argv[1])."\n";
} catch (Exception $e) {
    echo $e->getMessage();
}
