<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsTemperaturnuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-temperaturnu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'apikey') ?>

    <?= $form->field($model, 'pushtime') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <?php // echo $form->field($model, 'deviceid') ?>

    <?php // echo $form->field($model, 'devicevalue') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
