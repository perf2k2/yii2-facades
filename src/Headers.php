<?php

namespace perf2k2\yii2\facades;

class Headers {

    /**
     * @return \yii\web\HeaderCollection
     */
    public static function instance()
    {
        return \Yii::$app->request->headers;
    }

    /**
     * Returns a value indicating whether the named header exists.
     * @param string $name the name of the header
     * @return boolean whether the named header exists
     */
    public static function has($name)
    {
        return self::instance()->has($name);
    }

    /**
     * Returns the named header(s).
     * @param string $name the name of the header to return
     * @param mixed $default the value to return in case the named header does not exist
     * @param boolean $first whether to only return the first header of the specified name.
     * If false, all headers of the specified name will be returned.
     * @return string|array the named header(s). If `$first` is true, a string will be returned;
     * If `$first` is false, an array will be returned.
     */
    public static function get($name, $default = null, $first = true)
    {
        return self::instance()->get($name, $default, $first);
    }

    /**
     * Adds a new header.
     * If there is already a header with the same name, the new one will
     * be appended to it instead of replacing it.
     * @param string $name the name of the header
     * @param string $value the value of the header
     * @return $this \yii\web\HeaderCollection
     */
    public static function add($name, $value)
    {
        return self::instance()->add($name, $value);
    }

    /**
     * Adds a new header.
     * If there is already a header with the same name, it will be replaced.
     * @param string $name the name of the header
     * @param string $value the value of the header
     * @return $this \yii\web\HeaderCollection
     */
    public static function set($name, $value = '')
    {
        return self::instance()->set($name, $value);
    }

    /**
     * Removes a header.
     * @param string $name the name of the header to be removed.
     * @return array the value of the removed header. Null is returned if the header does not exist.
     */
    public static function remove($name)
    {
        return self::instance()->remove($name);
    }
}