<?php

namespace perf2k2\yii2\sugar;

class Cookie {

    public static function instance()
    {
        return \Yii::$app->request->cookies;
    }

    public static function has($name)
    {
        return self::instance()->has($name);
    }

    public static function add($name, $value, $expire = 0, $domain = '', $path = '/', $secure = false, $httpOnly = true)
    {
        self::instance()->add(new \yii\web\Cookie([
            'name' => $name,
            'value' => $value,
            'expire' => $expire,
            'domain' => $domain,
            'path' => $path,
            'secure' => $secure,
            'httpOnly' => $httpOnly,
        ]));
    }

    public static function get($name, $defaultValue = null)
    {
        return self::instance()->getValue($name, $defaultValue);
    }

    public static function remove($name)
    {
        self::instance()->remove($name);
    }
}