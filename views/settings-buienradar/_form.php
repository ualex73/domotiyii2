<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsBuienradar */
/* @var $form kartik\form\ActiveForm; */
?>

<div class="settings-buienradar-form col-md-offset-1 col-md-8">
    <legend>Buienradar</legend>
    <jumbotron>
        <div style="margin-right: 5px">
            <a href="http://buienradar.nl" target="_blank" class="btn btn-info">Buienradar</a>
            <a href="http://gratisweerdata.buienradar.nl/" target="_blank" class="btn btn-warning">API</a>
            <a href="http://www.gps-coordinates.net/" target="_blank" class="btn btn-success">Lat/Lon</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'urlbuienradar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'polltime',[
        'addon' => ['append' => ['content'=>'Seconds']]
    ])->input('number') ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <?= $form->field($model, 'outputprecision')->input('number') ?>

    <?= $form->field($model, 'output')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'devmaxvalue')->input('number') ?>
    <?= $form->field($model, 'devtimevalue')->input('number') ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
