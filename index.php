<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

/**
 * Require helpers
 */
require_once(__DIR__ . '/app/components/helpers.php');

// comment out the following two lines when deployed to production
//defined('YII_DEBUG') or define('YII_DEBUG', true);
//defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/app/config/app.php';

(new yii\web\Application($config))->run();
