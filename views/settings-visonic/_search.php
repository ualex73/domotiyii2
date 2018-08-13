<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsVisonicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-visonic-search">

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

    <?= $form->field($model, 'mastercode') ?>

    <?= $form->field($model, 'downloadcode') ?>

    <?php // echo $form->field($model, 'autosynctime') ?>

    <?php // echo $form->field($model, 'forcestandardmode') ?>

    <?php // echo $form->field($model, 'motiontimeout') ?>

    <?php // echo $form->field($model, 'sensorarmstatus') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <?php // echo $form->field($model, 'tcphost') ?>

    <?php // echo $form->field($model, 'tcpport') ?>

    <?php // echo $form->field($model, 'type') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
