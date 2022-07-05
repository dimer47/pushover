<?php

namespace LeonardoTeixeira\Pushover;

class Priority
{
    const LOWEST = -2;

    const LOW = -1;

    const NORMAL = 0;

    const HIGH = 1;

    const EMERGENCY = 2;

    /**
     * @return int[]
     */
    public static function getAllPriorities(): array
    {
        return [
            self::LOWEST,
            self::LOW,
            self::NORMAL,
            self::HIGH,
            self::EMERGENCY,
        ];
    }

    /**
     * @param $priority
     * @return bool
     */
    public static function has($priority): bool
    {
        if (in_array($priority, self::getAllPriorities())) {
            return true;
        }

        return false;
    }
}
