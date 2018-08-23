<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsSmsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-sms-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'polltime') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'serialport') ?>

    <?= $form->field($model, 'baudrate') ?>

    <?php // echo $form->field($model, 'pin') ?>

    <?php // echo $form->field($model, 'servicecentre') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
