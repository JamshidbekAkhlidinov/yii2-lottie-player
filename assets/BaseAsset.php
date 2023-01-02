<?php

namespace jamshidbekakhlidinov\assets;

use yii\web\AssetBundle;

class BaseAsset extends AssetBundle
{
    public $sourcePath = "@base/vendor/jamshidbekakhlidinov/src";

    /**
     * @inheritdoc
     */
    public $js = [
        'js/lottie-player.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
    
    ];
}