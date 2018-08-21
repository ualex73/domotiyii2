<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ActionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actions-search col-md-offset-1 col-md-6">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL],

        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>'required']) ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList($model->getAllActionTypes(),['prompt' => 'Select','class'=>'required']) ?>

    <?php // echo $form->field($model, 'param2') ?>

    <?php // echo $form->field($model, 'param3') ?>

    <?php // echo $form->field($model, 'param4') ?>

    <?php // echo $form->field($model, 'param5') ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Reset'), 'index',['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
