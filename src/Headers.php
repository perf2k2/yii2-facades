<?php

namespace perf2k2\yii2\sugar;

class Headers {

    public static function instance()
    {
        return \Yii::$app->request->headers;
    }

    public static function has($name)
    {
        return self::instance()->has($name);
    }

    public static function get($name)
    {
        return self::instance()->get($name);
    }

    public static function add($name, $value)
    {
        self::instance()->add($name, $value);
    }

    public static function set($name, $value)
    {
        self::instance()->set($name, $value);
    }

    public static function remove($name)
    {
        self::instance()->remove($name);
    }
}