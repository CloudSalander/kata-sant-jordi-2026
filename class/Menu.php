<?php 

//TODO: Validate user entry
class Menu {
    const INPUT_MESSAGE = "Please, choose option 1 or 2";
    const OPTIONS=["1- Rose", "2- Book"];

    public function showOptions() {
        echo self::INPUT_MESSAGE.PHP_EOL;
        foreach(self::OPTIONS as $option) echo $option.PHP_EOL;
    }
}