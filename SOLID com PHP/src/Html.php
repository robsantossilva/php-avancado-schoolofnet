<?php

namespace Robson\Solid;

use Robson\Solid\Tags\TagInterface;

class Html
{
    public function renderTag(TagInterface $tag)
    {
        return $tag->render();
    }
}