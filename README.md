# PHP 7.4 Segfault Reproducer

I'm seeing a segfault in PHP 7.4 that seems to be related to string concatenation. This project should allow it to be reproduced.

The problem line in question is:

    return preg_match('/^[a-z]{1,' . 76 - 2 . '}$/', $n) !== false;

This is in a static method in a base class *which is never run by the test*. This class is instantiated from PHPUnit via another class which extends this base class.

All the phpunit test does is create an instance of the derived class.

If I use the base class directly, I get a warning and no segfault:

```
The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence
 seg/src/Base.php:9
 seg/tests/segTest.php:25
```

So this is dependent on context. I have provided 2 tests - showing the difference.

The warning is perhaps an indication of where the problem might be, but regardless of whether the code is iffy, it shouldn't segfault!