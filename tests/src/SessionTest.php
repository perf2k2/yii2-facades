<?php

use perf2k2\yii2\facades\Session;

class SessionTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(\yii\web\Session::class, Session::instance());
    }

    public function testHas()
    {
        $this->assertFalse(Session::has('wrong_test_cookie'));
    }
}