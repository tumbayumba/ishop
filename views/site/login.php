<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('site','Login');
?>
<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-lg-offset-4 col-md-offset-6 p-b-30">
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['class' => 'leave-comment'],
                    'fieldConfig' => [  
                        'template' => "<div class=\"bo4 size15 m-b-5\">{input}</div>\n<div class=\"size4\">{error}</div>",
                    ],
                ]) ?>
                    <h4 class="m-text26 p-b-36 p-t-15"><?= Yii::t('site','Login'); ?></h4>
                    <?= $form->field($model, 'login')->textInput(['placeholder'=>Yii::t('site','login')]) ?>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>Yii::t('site','password')]) ?>
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    <div class="w-size25">
                        <?= Html::submitButton(Yii::t('site','Signin'), ['class' => 'flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4']) ?>
                    </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</section>
