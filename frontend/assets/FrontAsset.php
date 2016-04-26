<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    	'css/FrontAsset.css',
    ];
    public $js = [
    	'custom_assets/js/FrontAsset.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
