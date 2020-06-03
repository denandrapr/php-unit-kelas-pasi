<?php

use PHPUnit\Framework\TestCase;
include(__DIR__.'/../src/Guest.php');

class GuestBookTest extends TestCase
{
    public function testGuestMustHaveName()
    {
        $guest = new Guest('Wahyudi');
        $result = $guest->getName();

        $this->assertEquals('Wahyudi', $result);
    }
}