<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\CamerasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-cameras-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'cmdoptions') ?>

    <?= $form->field($model, 'viewstring') ?>

    <?php // echo $form->field($model, 'grabstring') ?>

    <?php // echo $form->field($model, 'ptztype') ?>

    <?php // echo $form->field($model, 'ptzbaseurl') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'viscaaddress') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'passwd') ?>

    <?php // echo $form->field($model, 'enabled') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
