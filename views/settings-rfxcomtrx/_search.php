<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsRfxcomtrxSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-rfxcomtrx-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'tcphost') ?>

    <?= $form->field($model, 'tcpport') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'serialport') ?>

    <?php // echo $form->field($model, 'baudrate') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <?php // echo $form->field($model, 'relayenabled') ?>

    <?php // echo $form->field($model, 'relayport') ?>

    <?php // echo $form->field($model, 'globalx10') ?>

    <?php // echo $form->field($model, 'oldaddrfmt') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
