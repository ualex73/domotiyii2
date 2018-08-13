<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsPlcbusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-plcbus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'serialport') ?>

    <?= $form->field($model, 'baudrate') ?>

    <?= $form->field($model, 'polltime') ?>

    <?php // echo $form->field($model, 'usercode') ?>

    <?php // echo $form->field($model, 'threephase') ?>

    <?php // echo $form->field($model, 'housecodes') ?>

    <?php // echo $form->field($model, 'ack') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
