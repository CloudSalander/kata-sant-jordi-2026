<?php

include_once 'ITakeGift.php';

class Rose implements ITakeGift {
    const colors = ["Red","Blue","Yellow","Pink","Black"];

    public function takeGift(): void {
        $randomRose = array_rand(self::colors);
        echo "Here's your ".self::colors[$randomRose]." rose".PHP_EOL;
    }
}