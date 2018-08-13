<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsTwitter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-twitter-form col-md-offset-1 col-md-4">
    <legend>
        Twitter
    </legend>
    <jumbotron>
        <div style="margin-left:5px">
        <?php
        echo Html::a('Send test Tweet <span class="fa fa-envelope-o"></span>', 'send-twitter' ,['class'=>'btn btn-success']);?>


        <?php
       echo Html::a('Your Tweets <span class="fa fa-globe"></span>',  "https://twitter.com/".$model->username, ['target'=>'_blank','class'=>'btn btn-warning']);
        ?>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sendtimestamp')->checkbox() ?>

    <?= $form->field($model, 'debug')->checkbox() ?>
    <p style="text-align: center">Note: Twitter module uses the bti cmmand line tool.</p>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
