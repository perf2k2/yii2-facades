<?php

use perf2k2\yii2\facades\Formatter;

class FormatterTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(\yii\i18n\Formatter::class, Formatter::instance());
    }
}