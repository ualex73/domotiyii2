<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOpenweathermap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-openweathermap-form">
    <legend>OpenWeatherMap</legend>
    <jumbotron>
        <div style="margin-right: 5px">
            <a href="http://openweathermap.org/" target="_blank" class="btn btn-success">OpenWeatherMap</a>
            <a href="http://openweathermap.org/register" target="_blank" class="btn btn-info">Register for API</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'apikey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cityid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'polltime',[
        'addon' => ['append' => ['content'=>'Seconds']]
    ])->input('number') ?>

    <?= $form->field($model, 'debug')->checkbox() ?>
<p style="text-align: center">To get a free account/API key click 'Register for API' </p>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
