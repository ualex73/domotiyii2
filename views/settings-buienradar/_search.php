<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsBuienradarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-buienradar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'urlbuienradar') ?>

    <?= $form->field($model, 'latitude') ?>

    <?= $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'polltime') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <?php // echo $form->field($model, 'outputprecision') ?>

    <?php // echo $form->field($model, 'output') ?>

    <?php // echo $form->field($model, 'devmaxvalue') ?>

    <?php // echo $form->field($model, 'devtimevalue') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
