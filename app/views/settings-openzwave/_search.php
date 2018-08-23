<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsOpenzwaveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-openzwave-search">

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

    <?= $form->field($model, 'reloadnodes') ?>

    <?php // echo $form->field($model, 'polltime') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <?php // echo $form->field($model, 'polltimesleeping') ?>

    <?php // echo $form->field($model, 'enablepollsleeping') ?>

    <?php // echo $form->field($model, 'enablepolllistening') ?>

    <?php // echo $form->field($model, 'polltimelistening') ?>

    <?php // echo $form->field($model, 'updateneighbor') ?>

    <?php // echo $form->field($model, 'enableupdateneighbor') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
