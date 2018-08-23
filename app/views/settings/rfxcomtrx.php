<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomtrx */
/* @var $form ActiveForm */
?>
<div class="settings-rfxcomtrx">

    <?php $form = ActiveForm::begin(); ?>

        <div class="hide">
            <?= $form->field($model, 'id') ?>
        </div>

        <?= $form->field($model, 'enabled')->checkbox() ?>
        <?= $form->field($model, 'tcpport') ?>
        <?= $form->field($model, 'relayport') ?>
        <?= $form->field($model, 'tcphost') ?>
        <?= $form->field($model, 'type') ?>
        <?= $form->field($model, 'baudrate') ?>
        <?= $form->field($model, 'serialport') ?>
        <?= $form->field($model, 'relayenabled')->checkbox() ?>
        <?= $form->field($model, 'globalx10')->checkbox() ?>
        <?= $form->field($model, 'oldaddrfmt')->checkbox() ?>
        <?= $form->field($model, 'debug')->checkbox() ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- settings-rfxcomtrx -->
