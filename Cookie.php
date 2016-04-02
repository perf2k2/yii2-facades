<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.02.16
 * Time: 16:08
 */

namespace perf2k2\yii2\acsa;


class Cookie {

    public static function has($name)
    {
        return \Yii::$app->request->cookies->has($name);
    }

    public static function get($name, $defaultValue = null, $withoutCsrfCheck = false)
    {
        if ($withoutCsrfCheck === true) {
            return isset($_COOKIE[$name]) ? $_COOKIE[$name] : $defaultValue;
        } else {
            return \Yii::$app->request->cookies->getValue($name, $defaultValue);
        }
    }

    public static function set($name, $value, $expire = 0, $domain = '', $path = '/', $secure = false, $httpOnly = true)
    {
        \Yii::$app->response->cookies->add(new \yii\web\Cookie([
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
        \Yii::$app->response->cookies->remove($name);
    }
}