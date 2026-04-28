<?php 
/*Note 
This is clearly a overengineering case. We don't currently need
a Strategy Pattern. We can discuss when it would be necessary,
but you can easily solve this exercise with a pair of arrays.
Sorry, solving it with arrays was boring to me :)
*/
include_once 'class/Menu.php';

$menu = new Menu();

$choice = $menu->selectOption();

if ($choice === "1") {
    $menu->takeGift(new Rose());
} else if ($choice === "2") {
    $menu->takeGift(new Book());
}
