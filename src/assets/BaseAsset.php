<?php

namespace jamshidbekakhlidinov\assets;

use yii\web\AssetBundle;

class BaseAsset extends AssetBundle
{
    public $sourcePath = "@vendor/jamshidbekakhlidinov/yii2-lottie-player/src/dist";

    public $js = [
        'js/lottie-player.js'
    ];
    public $css = [
    ];

    public $depends = [

    ];
}