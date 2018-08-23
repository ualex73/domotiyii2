<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsRfxcomtxSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-rfxcomtx-search">

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

    <?php // echo $form->field($model, 'relayenabled') ?>

    <?php // echo $form->field($model, 'handshake') ?>

    <?php // echo $form->field($model, 'relayport') ?>

    <?php // echo $form->field($model, 'disablex10') ?>

    <?php // echo $form->field($model, 'enablearc') ?>

    <?php // echo $form->field($model, 'enableharrison') ?>

    <?php // echo $form->field($model, 'enablekoppla') ?>

    <?php // echo $form->field($model, 'rfxmitter') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
