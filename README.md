﻿# Yii2LottiePlayer

**Install**

    composer require jamshidbekakhlidinov/yii2-lottie-player


Ishlatilishi

    <div class="d-flex justify-content-center">
    
        <?= LottiePlayer::widget([
            'src' => 'https://assets7.lottiefiles.com/packages/lf20_tmsiddoc.json',
            'options' => [
                'style' => [
                    'width' => '400px',
                ],
            ]
        ]);
        ?>
    
    </div>
