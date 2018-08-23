<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\GraphSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="graphs-search col-md-offset-1 col-md-6">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL],
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'group') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'device_value_01') ?>

    <?php // echo $form->field($model, 'device_value_02') ?>

    <?php // echo $form->field($model, 'device_value_03') ?>

    <?php // echo $form->field($model, 'device_value_04') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'graph_width') ?>

    <?php // echo $form->field($model, 'graph_height') ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
