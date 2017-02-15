<?php

namespace perf2k2\yii2\facades;

class Cookies {

    /**
     * @return mixed|\yii\web\CookieCollection
     */
    public static function instance()
    {
        return \Yii::$app->request->cookies;
    }

    /**
     * Returns whether there is a cookie with the specified name.
     * Note that if a cookie is marked for deletion from browser, this method will return false.
     * @param string $name the cookie name
     * @return boolean whether the named cookie exists
     */
    public static function has($name)
    {
        return self::instance()->has($name);
    }

    /**
     * @param string $name name of the cookie
     * @param string $value value of the cookie
     * @param string $domain the path on the server in which the cookie will be available on. The default is '/'.
     * @param integer $expire the timestamp at which the cookie expires. This is the server timestamp.
     * Defaults to 0, meaning "until the browser is closed".
     * @param string $path the path on the server in which the cookie will be available on. The default is '/'.
     * @param bool $secure whether cookie should be sent via secure connection
     * @param bool $httpOnly whether the cookie should be accessible only through the HTTP protocol.
     * By setting this property to true, the cookie will not be accessible by scripting languages,
     * such as JavaScript, which can effectively help to reduce identity theft through XSS attacks.
     */
    public static function add($name, $value, $domain = '', $expire = 0, $path = '/', $secure = false, $httpOnly = true)
    {
        self::instance()->add(new \yii\web\Cookie([
            'name' => $name,
            'value' => $value,
            'domain' => $domain,
            'expire' => $expire,
            'path' => $path,
            'secure' => $secure,
            'httpOnly' => $httpOnly,
        ]));
    }

    /**
     * Returns the value of the named cookie.
     * @param string $name the cookie name
     * @param mixed $defaultValue the value that should be returned when the named cookie does not exist.
     * @return mixed the value of the named cookie.
     */
    public static function get($name, $defaultValue = null)
    {
        return self::instance()->getValue($name, $defaultValue);
    }

    /**
     * Removes a cookie.
     * If `$removeFromBrowser` is true, the cookie will be removed from the browser.
     * In this case, a cookie with outdated expiry will be added to the collection.
     * @param \yii\web\Cookie|string $cookie the cookie object or the name of the cookie to be removed.
     * @param boolean $removeFromBrowser whether to remove the cookie from browser
     * @throws \yii\base\InvalidCallException if the cookie collection is read only
     */
    public static function remove($cookie, $removeFromBrowser = true)
    {
        self::instance()->remove($cookie, $removeFromBrowser);
    }
}