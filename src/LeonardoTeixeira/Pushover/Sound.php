<?php

namespace LeonardoTeixeira\Pushover;

class Sound
{
    const PUSHOVER = 'pushover';
    const BIKE = 'bike';
    const BUGLE = 'bugle';
    const CASHREGISTER = 'cashregister';
    const CLASSICAL = 'classical';
    const COSMIC = 'cosmic';
    const FALLING = 'falling';
    const GAMELAN = 'gamelan';
    const INCOMING = 'incoming';
    const INTERMISSION = 'intermission';
    const MAGIC = 'magic';
    const MECHANICAL = 'mechanical';
    const PIANOBAR = 'pianobar';
    const SIREN = 'siren';
    const SPACEALARM = 'spacealarm';
    const TUGBOAT = 'tugboat';
    const ALIEN = 'alien';
    const CLIMB = 'climb';
    const PERSISTENT = 'persistent';
    const ECHOO = 'echo';
    const UPDOWN = 'updown';
    const NONE = 'none';

    private static $CUSTOMS = [];

    /**
     * @return array
     */
    public static function getAllSounds(): array
    {
        return array_merge(self::getCustomSound(), self::getBasicsSound());
    }

    /**
     * @param $sound
     *
     * @return bool
     */
    public static function has($sound): bool
    {
      if (in_array($sound, self::getAllSounds())) {
        return true;
      }
      return false;
    }

    /**
     * @return array
     */
    public static function getCustomSound(): array
    {
        return self::$CUSTOMS;
    }
    /**
     * @return array
     */
    public static function getBasicsSound(): array
    {
        return [
            self::PUSHOVER,
            self::BIKE,
            self::BUGLE,
            self::CASHREGISTER,
            self::CLASSICAL,
            self::COSMIC,
            self::FALLING,
            self::GAMELAN,
            self::INCOMING,
            self::INTERMISSION,
            self::MAGIC,
            self::MECHANICAL,
            self::PIANOBAR,
            self::SIREN,
            self::SPACEALARM,
            self::TUGBOAT,
            self::ALIEN,
            self::CLIMB,
            self::PERSISTENT,
            self::ECHOO,
            self::UPDOWN,
            self::NONE
        ];
    }

    /**
     * @param array  $sounds
     */
    public static function setCustomSound(array $sounds): void
    {
        self::$CUSTOMS = $sounds;
    }

    /**
     * @param string  $sound
     */
    public static function addCustomSound(string $sound): void
    {
        self::$CUSTOMS[] = $sound;
    }

    /**
     * @param string  $sound
     */
    public static function removeCustomSound(string $sound): void
    {
        if (($key = array_search($sound, self::$CUSTOMS)) !== false) {
            unset(self::$CUSTOMS[$key]);
        }
    }
}
