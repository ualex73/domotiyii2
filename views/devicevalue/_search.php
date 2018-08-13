<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\DevicevalueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devicevalues-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'device_id') ?>

    <?= $form->field($model, 'valuenum') ?>

    <?= $form->field($model, 'value') ?>

    <?= $form->field($model, 'correction') ?>

    <?php // echo $form->field($model, 'units') ?>

    <?php // echo $form->field($model, 'log') ?>

    <?php // echo $form->field($model, 'logdisplay') ?>

    <?php // echo $form->field($model, 'logspeak') ?>

    <?php // echo $form->field($model, 'rrd') ?>

    <?php // echo $form->field($model, 'graph') ?>

    <?php // echo $form->field($model, 'valuerrddsname') ?>

    <?php // echo $form->field($model, 'valuerrdtype') ?>

    <?php // echo $form->field($model, 'lastchanged') ?>

    <?php // echo $form->field($model, 'lastseen') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'feedback') ?>

    <?php // echo $form->field($model, 'control') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
