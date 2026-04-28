<?php

include_once 'ITakeGift.php';

class Book implements ITakeGift {
        const TITLES = [
            "El arte de amar",
            "La era del vacío",
            "Manolito Gafotas",
            "Sin notícias de Gurb",
            "La puerta abierta"
        ];

        public function takeGift(): void {
            $randomBook = array_rand(self::TITLES);
            echo "Here's your ".self::TITLES[$randomBook].PHP_EOL;
        }
}
?>