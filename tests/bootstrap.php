<?php
define('YII_ENV', 'test');
defined('YII_DEBUG') or define('YII_DEBUG', true);

require_once(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
require __DIR__ .'/../vendor/autoload.php';

(new yii\web\Application([
    'id' => 'basic',
    'basePath' => __DIR__ . '/app/',
    'bootstrap' => ['log'],
    'components' => [
        'assetManager' => [
            'basePath' => '@app/web/assets',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
        ],
        'request' => [
            'cookieValidationKey' => 'VOvDMw_R5PFcTrbh6r4P6cXt0yQE3qmb',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
]))->run();

spl_autoload_register(function($class) {
    if (strpos($class, 'perf2k2') !== false) {
        require_once __DIR__ . '/../src/' . str_replace('perf2k2\\yii2\\facades\\', '', $class) . '.php';
    }
});