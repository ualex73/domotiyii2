<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ConditionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="conditions-search col-md-offset-1 col-md-6">

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

    <?= $form->field($model, 'description')->textInput(['class'=>'required']) ?>

    <?= $form->field($model, 'formula')->textInput(['class'=>'required']) ?>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Reset'), 'index',['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
