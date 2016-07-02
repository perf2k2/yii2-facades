<?php

use perf2k2\yii2\sugar\Cookies;

class CookiesTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        \Yii::$app->request->cookies->readOnly = false;
    }

    public function testInstance()
    {
        $this->assertInstanceOf('\yii\web\CookieCollection', Cookies::instance());
    }

    public function testHas()
    {
        $this->assertFalse(Cookies::has('wrong_test_cookie'));
    }

    public function testAdd()
    {
        Cookies::add('test_cookie', 'value', '', null);
        $this->assertTrue(Cookies::has('test_cookie'));
    }

    public function testGet()
    {
        $this->assertEquals('value', Cookies::get('test_cookie'));
        $this->assertEquals('default_value', Cookies::get('wrong_test_cookie', 'default_value'));
    }

    public function testRemove()
    {
        Cookies::remove('test_cookie');
        $this->assertFalse(Cookies::has('test_cookie'));
    }
}