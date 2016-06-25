<?php

defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require(__DIR__ . '/app/vendor/autoload.php');
require(__DIR__ . '/app/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/app/config/web.php');
$config['components']['assetManager']['basePath'] =  '@app/web/assets';

(new yii\web\Application($config))->run();

spl_autoload_register(function($class) {
    if (strpos($class, 'perf2k2') !== false) {
        require_once __DIR__ . '/../src/' . str_replace('perf2k2\\yii2\\sugar\\', '', $class) . '.php';
    }
});