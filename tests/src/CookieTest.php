<?php

use perf2k2\yii2\sugar\Cookie;

class CookieTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf('\yii\web\CookieCollection', Cookie::instance());
    }

    public function testHas()
    {
        $this->assertFalse(Cookie::has('wrong_test_cookie'));
    }
}