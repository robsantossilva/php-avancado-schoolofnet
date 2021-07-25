<?php

namespace Robson\Solid;

use Robson\Solid\Tags\A;
use Robson\Solid\Tags\Img;
use Robson\Solid\Tags\Ul;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderImage()
    {
        $html = new Html;
        $img = $html->renderTag(new Img('images/photo.jpg'));

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

    public function testCreateAnchorLinkWithImage()
    {
        $html = new Html;
        $img = $html->renderTag(new Img('images/photo.jpg'));
        $link = $html->renderTag(new A('http://seusite.com/perfil', $img));

        $this->assertEquals('<a href="http://seusite.com/perfil"><img src="images/photo.jpg"></a>', $link);
    }

    public function testRenderUl()
    {
        $html = new Html;
        $ulTag = new Ul(['Robson']);
        $ul = $html->renderTag($ulTag);

        $this->assertEquals('<ul><li>Robson</li></ul>', $ul);
        $this->assertEquals(['Robson'], $ulTag->list());
    }
}