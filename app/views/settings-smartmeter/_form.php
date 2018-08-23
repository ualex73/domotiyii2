<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsSmartmeter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-smartmeter-form col-md-offset-1 col-md-6">

    <legend>SmartMeter</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'type')->dropDownList(['serial' => 'serial', 'tcp' => 'tcp'],['onchange'=>'switchTypeExtra(this);']) ?>

    <?= $form->field($model, 'tcphost')->textInput(['maxlength' => true,'readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcphost']) ?>

    <?= $form->field($model, 'tcpport')->input('number',['readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcpport']) ?>

    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true,'class'=>'span5', 'readonly'=>($model->type == 'serial')? false : true, 'id'=>'serialport']) ?>

    <?= $form->field($model, 'baudrate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'databits')->input('number',['readonly'=>($model->type == 'serial')? false : true, 'id'=>'databits']) ?>

    <?= $form->field($model, 'stopbits')->input('number',['readonly'=>($model->type == 'serial')? false : true, 'id'=>'stopbits']) ?>

    <?= $form->field($model, 'parity')->input('number',['readonly'=>($model->type == 'serial')? false : true, 'id'=>'parity']) ?>

    <?= $form->field($model, 'updateinterval')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
