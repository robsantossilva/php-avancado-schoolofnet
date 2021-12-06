<?php 

$categories = (new \App\Model\Category)->getAll();

echo '<ul>';
foreach($categories as $category){
    echo '<li>'.$category['name'].'</li>';
}
echo '</ul>';