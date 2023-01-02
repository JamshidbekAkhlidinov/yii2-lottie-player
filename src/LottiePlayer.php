<?php

namespace jamshidbekakhlidinov;
use yii\bootstrap4\Html;
use yii\web\View;
use jamshidbekakhlidinov\assets\BaseAsset;

class LottiePlayer extends \yii\base\Widget
{
    public $src = "https://assets7.lottiefiles.com/packages/lf20_tmsiddoc.json";

    public $options = [];

    public function run()
    {
        parent::run();

        /** @var View */
        $view = $this->getView();

        BaseAsset::register($view);

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

?>

