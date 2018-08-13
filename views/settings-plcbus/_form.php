<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPlcbus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-plcbus-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'enabled')->textInput() ?>

    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baudrate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'polltime')->textInput() ?>

    <?= $form->field($model, 'usercode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'threephase')->textInput() ?>

    <?= $form->field($model, 'housecodes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ack')->textInput() ?>

    <?= $form->field($model, 'debug')->textInput() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
