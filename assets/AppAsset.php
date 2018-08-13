<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css',
        'https://use.fontawesome.com/releases/v5.0.8/css/solid.css',
    ];

    public $js = [
        'js/bootstrap-slider.js',
        'js/domotiga.js',
        'js/domotiga_mobile.js',
        'js/domotiga_openzwavecommander.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}
