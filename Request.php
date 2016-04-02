<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.02.16
 * Time: 16:08
 */

namespace perf2k2\yii2\acsa;


class Request {

    public static function instance()
    {
        return \Yii::$app->request;
    }

    public static function isGet()
    {
        return self::instance()->isGet;
    }

    public static function isPost()
    {
        return self::instance()->isPost;
    }

    public static function isAjax()
    {
        return self::instance()->isAjax;
    }

    public static function get($name = null, $defaultValue = null)
    {
        return self::instance()->get($name, $defaultValue);
    }

    public static function post($name = null, $defaultValue = null)
    {
        return self::instance()->post($name, $defaultValue);
    }

    public static function ip()
    {
        return self::instance()->userIP;
    }

    public static function csrf()
    {
        return self::instance()->getCsrfToken();
    }
}