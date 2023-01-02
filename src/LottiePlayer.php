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
            \Yii::getAlias('@vendor/jamshidbekakhlidinov/yii2-lottie-player/js/lottie-player.js'),
            ['position' => View::POS_HEAD]
        );

        $defaultOptions = [
            'speed' => 1,
            'loop' => true,
            'autoplay' => true,
        ];

        $this->src = \Yii::getAlias('@vendor/jamshidbekakhlidinov/yii2-lottie-player/json/not-fount-1.json');

        $options = array_merge($defaultOptions, $this->options);
        $options['src'] = $this->src;

        return Html::tag('lottie-player', '', $options);
    }
}

?>

