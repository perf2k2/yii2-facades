<?php

namespace perf2k2\yii2\facades;

class Session
{
    /**
     * @return \yii\web\Session
     */
    public static function instance()
    {
        return \Yii::$app->session;
    }

    /**
     * Adds a session variable.
     * If the specified name already exists, the old value will be overwritten.
     * @param string $key session variable name
     * @param mixed $value session variable value
     */
    public static function set($key, $value)
    {
        return self::instance()->set($key, $value);
    }

    /**
     * Returns the session variable value with the session variable name.
     * If the session variable does not exist, the `$defaultValue` will be returned.
     * @param string $key the session variable name
     * @param mixed $defaultValue the default value to be returned when the session variable does not exist.
     * @return mixed the session variable value, or $defaultValue if the session variable does not exist.
     */
    public static function get($key, $defaultValue = null)
    {
        return self::instance()->get($key, $defaultValue);
    }

    /**
     * Removes a session variable.
     * @param string $key the name of the session variable to be removed
     * @return mixed the removed value, null if no such session variable.
     */
    public static function remove($key)
    {
        return self::instance()->remove($key);
    }

    /**
     * @param mixed $key session variable name
     * @return bool whether there is the named session variable
     */
    public static function has($key)
    {
        return self::instance()->has($key);
    }

    /**
     * Returns a flash message.
     * @param string $key the key identifying the flash message
     * @param mixed $defaultValue value to be returned if the flash message does not exist.
     * @param bool $delete whether to delete this flash message right after this method is called.
     * If false, the flash message will be automatically deleted in the next request.
     * @return mixed the flash message or an array of messages if addFlash was used
     */
    public static function getFlash($key, $defaultValue = null, $delete = false)
    {
        return self::instance()->getFlash($key, $defaultValue, $delete);
    }

    /**
     * Sets a flash message.
     * A flash message will be automatically deleted after it is accessed in a request and the deletion will happen
     * in the next request.
     * If there is already an existing flash message with the same key, it will be overwritten by the new one.
     * @param string $key the key identifying the flash message. Note that flash messages
     * and normal session variables share the same name space. If you have a normal
     * session variable using the same name, its value will be overwritten by this method.
     * @param mixed $value flash message
     * @param bool $removeAfterAccess whether the flash message should be automatically removed only if
     * it is accessed. If false, the flash message will be automatically removed after the next request,
     * regardless if it is accessed or not. If true (default value), the flash message will remain until after
     * it is accessed.
     */
    public static function setFlash($key, $value = true, $removeAfterAccess = true)
    {
        return self::instance()->setFlash($key, $value, $removeAfterAccess);
    }

    /**
     * Adds a flash message.
     * If there are existing flash messages with the same key, the new one will be appended to the existing message array.
     * @param string $key the key identifying the flash message.
     * @param mixed $value flash message
     * @param bool $removeAfterAccess whether the flash message should be automatically removed only if
     * it is accessed. If false, the flash message will be automatically removed after the next request,
     * regardless if it is accessed or not. If true (default value), the flash message will remain until after
     * it is accessed.
     */
    public static function addFlash($key, $value = true, $removeAfterAccess = true)
    {
        return self::instance()->addFlash($key, $value, $removeAfterAccess);
    }

    /**
     * Removes a flash message.
     * @param string $key the key identifying the flash message. Note that flash messages
     * and normal session variables share the same name space.  If you have a normal
     * session variable using the same name, it will be removed by this method.
     * @return mixed the removed flash message. Null if the flash message does not exist.
     */
    public static function removeFlash($key)
    {
        return self::instance()->removeFlash($key);
    }
}