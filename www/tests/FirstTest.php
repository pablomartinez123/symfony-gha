<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FirstTest extends KernelTestCase
{
    public function testSomething()
    {
        self::bootKernel();

        $this->assertEquals(true,true);
    }
}
