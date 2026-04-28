<?php 
include('Rose.php');
include('Book.php');

class Menu {
    const INPUT_MESSAGE = "Please, choose option 1 or 2";
    const OPTIONS=["1- Rose", "2- Book"];

    public function selectOption(): string {
        foreach(self::OPTIONS as $option) echo $option.PHP_EOL;
        $inputValue = readline(self::INPUT_MESSAGE);
        return $inputValue;
    }

    public function takeGift(ITakeGift $giftStrategy): void {
        $giftStrategy->takeGift();
    }   
}