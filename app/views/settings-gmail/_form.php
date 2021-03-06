<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsGmail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-gmail-form col-md-offset-1 col-md-6">
    <legend>Gmail</legend>

    <jumbotron>
        <div style="margin-left:5px">
            <a href="https://mail.google.com" target="_blank" class="btn btn-danger">Google Gmail<span class="fa fa-gmail"></span> </a>
        </div>
    </jumbotron>

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'polltime',[
        'addon' => ['append' => ['content'=>'Seconds']]
    ])->input('number') ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
