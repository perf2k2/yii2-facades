<?php

namespace perf2k2\yii2\sugar;

class Cache {

    public static function instance()
    {
        return \Yii::$app->cache;
    }
    public static function set($key, $value, $duration = 0, $dependency = null)
    {
        self::instance()->set($key, $value, $duration, $dependency);
    }

    public static function get($key)
    {
        return self::instance()->get($key);
    }
}