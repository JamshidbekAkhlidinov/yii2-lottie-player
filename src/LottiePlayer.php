<?php

namespace jamshidbekakhlidinov;
use yii\bootstrap4\Html;
use yii\web\View;

class LottiePlayer extends \yii\base\Widget
{
    public $src;

    public $options = [];

    public function run()
    {
        $this->view->registerJsFile(
            \Yii::getAlias('@storageUrl/lottie-player/lottie-player.js'),
            ['position' => View::POS_HEAD]
        );

        $defaultOptions = [
            'speed' => 1,
            'loop' => true,
            'autoplay' => true,
        ];

        $options = array_merge($defaultOptions, $this->options);
        $options['src'] = $this->src;

        return Html::tag('lottie-player', '', $options);
    }
}