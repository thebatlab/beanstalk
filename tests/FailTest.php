<?php

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FailTest extends KernelTestCase
{

    public function testFailCase()
    {
        self::assertEquals(false, false);
    }
}