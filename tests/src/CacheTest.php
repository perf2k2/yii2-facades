<?php

use perf2k2\yii2\facades\Cache;

class CacheTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf('\yii\caching\Cache', Cache::instance());
    }

    public function testSet()
    {
        $this->assertTrue(Cache::set('test', 'test_value'));
        $this->assertTrue(Cache::set('test', 'test_value', 100));
        $this->assertTrue(Cache::set('test', 'test_value', 1000, new \yii\caching\ExpressionDependency('')));
    }

    public function testGet()
    {
        $this->assertEquals('test_value', Cache::get('test'));
        $this->assertFalse(Cache::get('wrong_test'));
    }
}