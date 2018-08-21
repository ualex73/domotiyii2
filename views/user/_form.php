<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form col-md-offset-1 col-md-4">
    <p class="note">Fields with <span style="color:red">*</span> are required.</p>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'emailaddress')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'admin')->checkbox() ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'lastlogin')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
