<?php

use perf2k2\yii2\sugar\Request;

class RequestTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf('\yii\web\Request', Request::instance());
    }

    public function testIsGet()
    {
        $this->assertTrue(Request::isGet());
    }

    public function testIsPost()
    {
        $this->assertFalse(Request::isPost());
    }

    public function testIsAjax()
    {
        $this->assertFalse(Request::isAjax());
    }

    public function testGet()
    {
        $this->assertEquals('value', Request::get('test_param', 'value'));
        $this->assertNull(Request::get('test_param'));
    }

    public function testPost()
    {
        $this->assertEquals('value', Request::post('test_param', 'value'));
        $this->assertNull(Request::post('test_param'));
    }

    public function testIp()
    {
        $this->assertNull(Request::ip());
    }

    public function testGetScrfToken()
    {
        $this->assertEquals(56, strlen(Request::csrf()));
    }
}