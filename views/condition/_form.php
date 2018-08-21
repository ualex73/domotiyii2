<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Conditions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="conditions-form col-md-offset-1 col-md-4">
    <p class="note">Fields with <span style="color:red">*</span> are required.</p>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>'required']) ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <?= $form->field($model, 'formula')->textarea(['rows' => 6,'class'=>'required']) ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
    form div.required label.control-label:after {
        content:" * ";
        color:red;
    }
</style>