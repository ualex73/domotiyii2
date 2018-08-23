<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsHomematicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-homematic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'debug') ?>

    <?= $form->field($model, 'tcphost') ?>

    <?= $form->field($model, 'hmid') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'tcpport') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
