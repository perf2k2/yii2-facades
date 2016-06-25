<?php

use perf2k2\yii2\sugar\Db;

class DbTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf('yii\db\Connection', Db::instance());
    }

    public function testCommand()
    {
        $this->assertInstanceOf('yii\db\Command', Db::command());
    }

    public function testQuery()
    {
        $this->assertInstanceOf('yii\db\Query', Db::query());
    }

    public function testTransaction()
    {
        $this->assertInstanceOf('yii\db\Transaction', Db::transaction());
    }
}