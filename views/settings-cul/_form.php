<?php

use kartik\form\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsCul */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-cul-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
            'type' => ActiveForm::TYPE_HORIZONTAL,
            'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'type')->dropDownList(['serial' => 'serial', 'tcp' => 'tcp'],['maxlength' => true, 'onchange'=>'switchType(this);']) ?>

    <?= $form->field($model, 'tcphost')->textInput(['maxlength' => true, 'readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcphost']) ?>

    <?= $form->field($model, 'tcpport')->textInput(['readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcpport']) ?>


    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true, 'readonly'=>($model->type == 'serial')? false : true, 'id'=>'serialport']) ?>

    <?= $form->field($model, 'baudrate')->dropDownList(['9600' => '9600', '19200' => '19200', '38400' => '38400', '57600' => '57600', '115200' => '115200'], ['maxlength' => true, 'readonly'=>($model->type == 'serial')? false : true, 'id'=>'baudrate']) ?>

    <?= $form->field($model, 'model')->dropDownList(['1' => 'CUL', '2' => 'CUN', '3' => 'CUNO', '4' => 'CUR']) ?>

    <?= $form->field($model, 'fhtid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
