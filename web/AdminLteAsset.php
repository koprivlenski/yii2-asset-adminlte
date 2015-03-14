<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace koprivlenski\web;

use yii\web\AssetBundle;

/**
 * Configuration for `backend` client script files
 * @since 4.0
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@bower/';
    public $css = [
        'admin-lte/dist/css/AdminLTE.css',
        'admin-lte/dist/css/skins/_all-skins.css',
        'font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
		'admin-lte/plugins/slimScroll/jquery.slimscroll.js', 
		'admin-lte/dist/js/app.js'
	];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
