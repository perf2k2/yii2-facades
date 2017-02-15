<?php

use perf2k2\yii2\facades\Headers;

class HeadersTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf('\yii\web\HeaderCollection', Headers::instance());
    }

    public function testHas()
    {
        $this->assertFalse(Headers::has('wrong_headers'));
    }

    public function testGet()
    {
        $this->assertEquals('value', Headers::get('test_param', 'value', false));
        $this->assertEquals('value', Headers::get('test_param', 'value'));
        $this->assertNull(Headers::get('wrong_headers'));
    }

    public function testAdd()
    {
        $this->assertInstanceOf('\yii\web\HeaderCollection', Headers::add('test_param', 'value1'));
        $this->assertEquals('value1', Headers::get('test_param', 'value'));
    }

    public function testSet()
    {
        $this->assertInstanceOf('\yii\web\HeaderCollection', Headers::set('test_param', 'value2'));
        $this->assertTrue(is_array(Headers::get('test_param', 'value', false)));
        $this->assertEquals('value2', Headers::get('test_param', 'value'));
    }

    public function testRemove()
    {
        $this->assertEquals(1, count(Headers::remove('test_param')));
    }
}