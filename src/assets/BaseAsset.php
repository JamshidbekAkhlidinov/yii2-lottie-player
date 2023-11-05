<?php

namespace ustadev\widgets\assets;

use yii\web\AssetBundle;

class BaseAsset extends AssetBundle
{
    public $sourcePath = "@vendor/ustadev/yii2-lottie-player/src/dist";

    public $js = [
        'js/lottie-player.js'
    ];
    public $css = [
    ];

    public $depends = [

    ];
}