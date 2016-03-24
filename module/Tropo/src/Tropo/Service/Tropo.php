<?php
namespace Tropo\Service;

class Tropo
{
    protected $recordings;

    public function __construct()
    {
        $this->recordings = array (
            'http://blob.phpdev.nu/elephpone/michelangelo_vandam.mp3',
            'http://blob.phpdev.nu/elephpone/tessa_mero.mp3',
            'http://blob.phpdev.nu/elephpone/khayrattee_wasseem.mp3',
            'http://blob.phpdev.nu/elephpone/cal_evans.mp3',
            'http://blob.phpdev.nu/elephpone/thijs_feryn.mp3',
            'http://blob.phpdev.nu/elephpone/gabriel_somoza.mp3',
            'http://blob.phpdev.nu/elephpone/beth_tucker_long.mp3',
        );
    }

    public function getRandomRecording()
    {
        $index = rand(0, count($this->recordings) - 1);
        return $this->recordings[$index];
    }
}