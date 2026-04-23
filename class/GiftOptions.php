<?php

enum TurnType: string {
    case ROSE = 1;
    case BOOK = 2;

    public static function showOptions(): void {
        foreach (self::cases() as $turnType) {
            echo sprintf("%s - %s\n", $turnType->name, $turnType->value);
        }
    }
    
    public static function fromString(string $option): ?self {
        return match($option) {
            '1' => self::1,
            '2' => self::2,
            default => null
        };
    }
}