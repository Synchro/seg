<?php

namespace Synchro\seg;

class Base
{
    protected static function f(string $n): bool
    {
        //Crashes
        return preg_match('/^[a-z]{1,' . 76 - 2 . '}$/', $n) !== false;

        //Does not crash
//        return preg_match('/^[a-z]{1,' . 74 . '}$/', $n) !== false;

        //Does not crash
//        return preg_match('/^[a-z]{1,' . (76 - 2) . '}$/', $n) !== false;
    }
}