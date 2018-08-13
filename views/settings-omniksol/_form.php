<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOmniksol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-omniksol-form col-md-offset-1 col-md-6">

    <legend>Omniksol</legend>
    <jumbotron>
        <div style="margin-right: 5px">
            <a href="http://<?= $model->tcphost?>" target="_blank" class="btn btn-success">Your Omniksol Inverter</a>
            <a href="http://www.omnikportal.com/" target="_blank" class="btn btn-info">OmnikSolar Portal</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'tcpport')->input('number') ?>
    <?= $form->field($model, 'tcphost')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cron')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discover')->checkbox() ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
