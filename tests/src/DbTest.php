<?php

use perf2k2\yii2\facades\Db;

class DbTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        \Yii::$app->set('db', function() {
            return $this->getMockBuilder('yii\db\Connection')
                ->setMethods(['open', 'beginTransaction'])
                ->getMock();
        });

        \Yii::$app->db->expects($this->any())
            ->method('open')
            ->will($this->returnValue(true));

        \Yii::$app->db->expects($this->any())
            ->method('beginTransaction')
            ->will($this->returnValue(new \yii\db\Transaction()));
    }

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