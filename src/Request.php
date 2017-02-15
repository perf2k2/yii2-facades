<?php

namespace perf2k2\yii2\facades;

class Request
{
    /**
     * @return \yii\console\Request|\yii\web\Request
     */
    public static function instance()
    {
        return \Yii::$app->request;
    }

    /**
     * @return bool whether this is a GET request. This property is read-only.
     */
    public static function isGet()
    {
        return self::instance()->isGet;
    }

    /**
     * @return bool whether this is a POST request. This property is read-only.
     */
    public static function isPost()
    {
        return self::instance()->isPost;
    }

    /**
     * @return bool whether this is an AJAX (XMLHttpRequest) request. This property is read-only.
     */
    public static function isAjax()
    {
        return self::instance()->isAjax;
    }

    /**
     * Returns GET parameter with a given name. If name isn't specified, returns an array of all GET parameters.
     *
     * @param string $name the parameter name
     * @param mixed $defaultValue the default parameter value if the parameter does not exist.
     * @return array|mixed
     */
    public static function get($name = null, $defaultValue = null)
    {
        return self::instance()->get($name, $defaultValue);
    }

    /**
     * Returns POST parameter with a given name. If name isn't specified, returns an array of all POST parameters.
     *
     * @param string $name the parameter name
     * @param mixed $defaultValue the default parameter value if the parameter does not exist.
     * @return array|mixed
     */
    public static function post($name = null, $defaultValue = null)
    {
        return self::instance()->post($name, $defaultValue);
    }

    /**
     * @return string|null user IP address, null if not available. This property is read-only.
     */
    public static function ip()
    {
        return self::instance()->userIP;
    }

    /**
     * Returns the token used to perform CSRF validation.
     *
     * This token is a masked version of [[rawCsrfToken]] to prevent [BREACH attacks](http://breachattack.com/).
     * This token may be passed along via a hidden field of an HTML form or an HTTP header value
     * to support CSRF validation.
     * @param boolean $regenerate whether to regenerate CSRF token. When this parameter is true, each time
     * this method is called, a new CSRF token will be generated and persisted (in session or cookie).
     * @return string the token used to perform CSRF validation.
     */
    public static function csrf($regenerate = false)
    {
        return self::instance()->getCsrfToken($regenerate);
    }
}