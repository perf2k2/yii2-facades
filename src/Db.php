<?php

namespace perf2k2\yii2\sugar;

use yii\db\Command;
use yii\db\Query;

class Db {

    /**
     * @return \yii\db\Connection
     */
    public static function instance()
    {
        return \Yii::$app->db;
    }

    /**
     * @return \yii\db\Command
     */
    public static function command()
    {
        $command = new Command();
        $command->db = self::instance();
        return $command;
    }

    /**
     * @return \yii\db\Query
     */
    public static function query()
    {
        return new Query();
    }

    /**
     * @return \yii\db\Transaction
     */
    public static function transaction()
    {
        return self::instance()->beginTransaction();
    }
}