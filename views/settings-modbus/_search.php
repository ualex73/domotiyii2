<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsModbusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-modbus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'modbustype') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'tcphost') ?>

    <?= $form->field($model, 'tcpport') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'serialport') ?>

    <?php // echo $form->field($model, 'baudrate') ?>

    <?php // echo $form->field($model, 'stopbits') ?>

    <?php // echo $form->field($model, 'databits') ?>

    <?php // echo $form->field($model, 'parity') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <?php // echo $form->field($model, 'polltime') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
