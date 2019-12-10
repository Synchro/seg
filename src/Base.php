<?php

namespace Synchro\seg;

class Base
{
    protected static function f(string $n): bool
    {
        return preg_match('/^[a-z]{1,' . 76 - 2 . '}$/', $n) !== false;
    }
}