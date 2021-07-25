<?php 
//Project Strategy (Interface)

require __DIR__.'/vendor/autoload.php';

interface Db
{
    public function connect($server, $user, $password);
}

class Connection
{
    public function __construct($server, $user, $password)
    {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect(Db $db){
        $db->connect($this->server, $this->user, $this->password);
    }
}

class Mysql implements Db{
    public function connect($server, $user, $password)
    {
        echo 'Mysql connected!';
    }
}

$mysqlDb = new Mysql();
$connection = new Connection('http:localhost:3306','root','root');
$connection->connect($mysqlDb);

print_r(Db::class);