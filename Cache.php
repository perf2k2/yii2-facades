<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.02.16
 * Time: 16:08
 */

namespace perf2k2\yii2\acsa;


class Cache {

    public static function set($key, $value, $duration = 0, $dependency = null)
    {
        \Yii::$app->cache->set($key, $value, $duration, $dependency);
    }

    public static function get($key)
    {
        return \Yii::$app->cache->get($key);
    }
}