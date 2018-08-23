<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form col-md-offset-1 col-md-4" style="margin-bottom: 10px">
    <p class="note">Fields with <span style="color:red">*</span> are required.</p>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobileno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'callnr')->textInput(['value'=>'0']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidmobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['value'=>'0']) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'holidaycard')->checkbox() ?>

    <?= $form->field($model, 'firstseen')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'lastseen')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'comments')->textInput();?>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
