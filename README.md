# Yii2LottiePlayer

**Install**

    composer require ustadev/yii2-lottie-player


Ishlatilishi

    <div class="d-flex justify-content-center">
    
        <?php
        use ustadev\widgets\LottiePlayer;
        echo LottiePlayer::widget([
            'src' => 'https://assets7.lottiefiles.com/packages/lf20_tmsiddoc.json',
            'options' => [
                'style' => [
                    'width' => '400px',
                ],
            ]
        ]);
        ?>
    
    </div>
