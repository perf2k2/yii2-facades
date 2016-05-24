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

    public static function get($name, $defaultValue = null, $withoutCsrfCheck = false)
    {
        if ($withoutCsrfCheck === true) {
            return isset($_COOKIE[$name]) ? $_COOKIE[$name] : $defaultValue;
        } else {
            return self::instance()->getValue($name, $defaultValue);
        }
    }

    public static function set($name, $value, $expire = 0, $domain = '', $path = '/', $secure = false, $httpOnly = true)
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

    public static function remove($name)
    {
        self::instance()->remove($name);
    }
}