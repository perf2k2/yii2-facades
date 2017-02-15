<?php

namespace perf2k2\yii2\facades;

class User {

    /**
     * @return mixed|\yii\web\User
     */
    public static function instance()
    {
        return \Yii::$app->user;
    }

    /**
     * Returns a value indicating whether the user is a guest (not authenticated).
     * @return boolean whether the current user is a guest.
     * @see getIdentity()
     */
    public function isGuest()
    {
        return self::instance()->getIsGuest();
    }

    /**
     * Returns a value that uniquely represents the user.
     * @return string|integer the unique identifier for the user. If null, it means the user is a guest.
     * @see getIdentity()
     */
    public function getId()
    {
        return self::instance()->getId();
    }

    /**
     * Checks if the user can perform the operation as specified by the given permission.
     *
     * Note that you must configure "authManager" application component in order to use this method.
     * Otherwise it will always return false.
     *
     * @param string $permissionName the name of the permission (e.g. "edit post") that needs access check.
     * @param array $params name-value pairs that would be passed to the rules associated
     * with the roles and permissions assigned to the user.
     * @param boolean $allowCaching whether to allow caching the result of access check.
     * When this parameter is true (default), if the access check of an operation was performed
     * before, its result will be directly returned when calling this method to check the same
     * operation. If this parameter is false, this method will always call
     * [[\yii\rbac\ManagerInterface::checkAccess()]] to obtain the up-to-date access result. Note that this
     * caching is effective only within the same request and only works when `$params = []`.
     * @return boolean whether the user can perform the operation as specified by the given permission.
     */
    public static function can($permissionName, $params = [], $allowCaching = true)
    {
        return self::instance()->can($permissionName, $params, $allowCaching);
    }
}