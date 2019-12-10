<?php

namespace Synchro\seg\Test;

use Synchro\seg\Generic;
use Synchro\seg\Base;
use PHPUnit\Framework\TestCase;

/**
 * Class ExampleTest.
 *
 * @package Synchro\seg\Test
 */
class segTest extends TestCase
{
    public function testGeneric(): void
    {
        //This causes a segfault
        $a = new Generic();
    }

    public function testBase(): void
    {
        //This throws a warning
        $a = new Base();
    }
}
