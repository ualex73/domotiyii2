<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Scenes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scenes-form col-md-offset-1 col-md-4">

    <p class="note">Fields with <span style="color:red">*</span> are required.</p>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true],['class'=>'required']) ?>

    <?= $form->field($model, 'event_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Events::find()->all(),'id','name'),['prompt'=>'Select']) ?>

    <?= $form->field($model, 'location_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Locations::find()->all(),'id','name'),['prompt'=>'Select']) ?>

    <?= $form->field($model, 'category')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(),'id','name'),['prompt'=>'Select']) ?>

    <?= $form->field($model, 'log')->checkbox() ?>

    <?= $form->field($model, 'firstrun')->textInput() ?>

    <?= $form->field($model, 'lastrun')->textInput() ?>

    <?= $form->field($model, 'comments')->textInput() ?>



    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
