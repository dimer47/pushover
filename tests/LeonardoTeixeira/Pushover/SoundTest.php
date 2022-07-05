<?php

namespace LeonardoTeixeira\Pushover;

use PHPUnit\Framework\TestCase;

class SoundTest extends TestCase
{

    private $sounds;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sounds = [
            'pushover',
            'bike',
            'bugle',
            'cashregister',
            'classical',
            'cosmic',
            'falling',
            'gamelan',
            'incoming',
            'intermission',
            'magic',
            'mechanical',
            'pianobar',
            'siren',
            'spacealarm',
            'tugboat',
            'alien',
            'climb',
            'persistent',
            'echo',
            'updown',
            'none',
        ];
    }

    public function testContainsAllSounds()
    {
        $allSounds = Sound::getAllSounds();
        foreach ($this->sounds as $sound) {
            $this->assertContains($sound, $allSounds);
        }
    }

    public function testIfSoundExists()
    {
        $this->assertTrue(Sound::has('mechanical'));
        $this->assertFalse(Sound::has('invalid_sound'));
    }

    public function testAddingCustomSound()
    {
        Sound::addCustomSound('customSound');
        $this->assertTrue(Sound::has('customSound'));
    }

    public function testRemoveCustomSound()
    {
        Sound::addCustomSound('customSound');
        Sound::removeCustomSound('customSound');
        $this->assertFalse(Sound::has('customSound'));
    }

    public function testSetCustomSounds()
    {
        Sound::setCustomSound(['customSound1', 'customSound2']);
        $this->assertTrue(Sound::has('customSound1'));
        $this->assertTrue(Sound::has('customSound2'));
    }
}
