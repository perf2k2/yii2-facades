<?php

use perf2k2\yii2\sugar\Cookie;

class CookieTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        \Yii::$app->request->cookies->readOnly = false;
    }

    public function testInstance()
    {
        $this->assertInstanceOf('\yii\web\CookieCollection', Cookie::instance());
    }

    public function testHas()
    {
        $this->assertFalse(Cookie::has('wrong_test_cookie'));
    }

    public function testSet()
    {
        Cookie::set('test_cookie', 'value', null);
        $this->assertTrue(Cookie::has('test_cookie'));
    }

    public function testGet()
    {
        $this->assertEquals('value', Cookie::get('test_cookie'));
        $this->assertEquals('default_value', Cookie::get('wrong_test_cookie', 'default_value'));
    }

    public function testRemove()
    {
        Cookie::remove('test_cookie');
        $this->assertFalse(Cookie::has('test_cookie'));
    }
}