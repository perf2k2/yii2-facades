<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.02.16
 * Time: 16:08
 */

namespace perf2k2\yii2\sugar;


class Headers {

    public static function has($name)
    {
        return \Yii::$app->request->headers->has($name);
    }

    public static function get($name)
    {
        return \Yii::$app->request->headers->get($name);
    }

    public static function add($name, $value)
    {
        \Yii::$app->response->headers->add($name, $value);
    }

    public static function set($name, $value)
    {
        \Yii::$app->response->headers->set($name, $value);
    }

    public static function remove($name)
    {
        \Yii::$app->response->headers->remove($name);
    }
}