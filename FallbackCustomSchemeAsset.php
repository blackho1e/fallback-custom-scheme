<?php
namespace blackho1e\FallbackCustomScheme;

use yii\web\AssetBundle;

class FallbackCustomSchemeAsset extends AssetBundle
{
    public $sourcePath = '@npm/fallback-custom-scheme';

    public $js = [
        'bundle.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
