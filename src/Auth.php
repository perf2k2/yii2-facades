<?php

namespace perf2k2\yii2\facades;

use yii\rbac\ManagerInterface;

class Auth
{
    /**
     * @return ManagerInterface
     */
    public static function instance()
    {
        return \Yii::$app->authManager;
    }

    /**
     * Checks if the user has the specified permission.
     * @param string|integer $userId the user ID. This should be either an integer or a string representing
     * the unique identifier of a user. See [[\yii\web\User::id]].
     * @param string $permissionName the name of the permission to be checked against
     * @param array $params name-value pairs that will be passed to the rules associated
     * with the roles and permissions assigned to the user.
     * @return boolean whether the user has the specified permission.
     * @throws \yii\base\InvalidParamException if $permissionName does not refer to an existing permission
     */
    public static function checkAccess($userId, $permissionName, $params = [])
    {
        return self::instance()->checkAccess($userId, $permissionName, $params);
    }
}