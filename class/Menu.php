<?php 
include('Rose.php');
//TODO: Validate user entry
class Menu {
    const INPUT_MESSAGE = "Please, choose option 1 or 2";
    const OPTIONS=["1- Rose", "2- Book"];

    public function showOptions() {
        $inputValue = readline(self::INPUT_MESSAGE);
        foreach(self::OPTIONS as $option) echo $option.PHP_EOL;
        $this->takeGift($inputValue);
    }

    public function takeGift(int $gift): void {
        if($gift == 1) new Rose()->takeGift();
    }

    
}