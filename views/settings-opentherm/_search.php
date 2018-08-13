<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsOpenthermSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-opentherm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'temperatureoverride') ?>

    <?= $form->field($model, 'syncclock') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'serialport') ?>

    <?php // echo $form->field($model, 'polltime') ?>

    <?php // echo $form->field($model, 'thermostat') ?>

    <?php // echo $form->field($model, 'tcphost') ?>

    <?php // echo $form->field($model, 'tcpport') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'relayenabled') ?>

    <?php // echo $form->field($model, 'relayport') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
