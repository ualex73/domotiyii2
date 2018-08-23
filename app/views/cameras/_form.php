<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeviceCameras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-cameras-form col-md-offset-1 col-md-4">
    <p class="note"><?php echo Yii::t('app','Fields with <span style="color: red">*</span> are required.') ?></p>

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>
    <?= $form->field($model, 'enabled')->checkbox() ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'type')->dropDownList($model->getAllCameraTypes()) ?>

    <?= $form->field($model, 'cmdoptions')->textInput() ?>

    <?= $form->field($model, 'viewstring')->textInput() ?>

    <?= $form->field($model, 'grabstring')->textInput() ?>

    <?= $form->field($model, 'ptztype')->dropDownList($model->getAllCameraPTZTypes()) ?>

    <?= $form->field($model, 'ptzbaseurl')->textInput() ?>



    <?= $form->field($model, 'viscaaddress')->textInput(['readonly'=>($model->ptztype == "Sony VISCA")? false : true, 'id'=>'viscaaddress']) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passwd')->passwordInput(['maxlength' => true]) ?>

   

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
