<?php

namespace perf2k2\yii2\facades;

class Cache {

    /**
     * @return \yii\caching\Cache
     */
    public static function instance()
    {
        return \Yii::$app->cache;
    }

    /**
     * Stores a value identified by a key into cache.
     * If the cache already contains such a key, the existing value and
     * expiration time will be replaced with the new ones, respectively.
     *
     * @param mixed $key a key identifying the value to be cached. This can be a simple string or
     * a complex data structure consisting of factors representing the key.
     * @param mixed $value the value to be cached
     * @param integer $duration the number of seconds in which the cached value will expire. 0 means never expire.
     * @param \yii\caching\Dependency $dependency dependency of the cached item. If the dependency changes,
     * the corresponding value in the cache will be invalidated when it is fetched via [[get()]].
     * This parameter is ignored if [[serializer]] is false.
     * @return boolean whether the value is successfully stored into cache
     */
    public static function set($key, $value, $duration = 0, $dependency = null)
    {
        return self::instance()->set($key, $value, $duration, $dependency);
    }

    /**
     * Retrieves a value from cache with a specified key.
     * @param mixed $key a key identifying the cached value. This can be a simple string or
     * a complex data structure consisting of factors representing the key.
     * @return mixed the value stored in cache, false if the value is not in the cache, expired,
     * or the dependency associated with the cached data has changed.
     */
    public static function get($key)
    {
        return self::instance()->get($key);
    }
}