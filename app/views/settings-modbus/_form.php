<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsModbus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-modbus-form col-md-offset-1 col-md-6">

    <legend>Modbus</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>
    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'modbustype')->dropDownList(['RTU' => 'RTU', 'ASCII' => 'ASCII']) ?>
    <?= $form->field($model, 'type')->dropDownList(['serial' => 'serial', 'tcp' => 'tcp'], ['onchange'=>'switchTypeExtra(this);']) ?>


    <?= $form->field($model, 'tcphost')->textInput(['maxlength' => true,'readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcphost']) ?>

    <?= $form->field($model, 'tcpport')->input('number',['readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcphost']) ?>
    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true,'class'=>'span5', 'readonly'=>($model->type == 'serial')? false : true, 'id'=>'serialport']) ?>


    <?= $form->field($model, 'baudrate')->dropDownList(['9600' => '9600', '19200' => '19200', '38400' => '38400', '57600' => '57600', '115200' => '115200'],['readonly'=>($model->type == 'serial')? false : true, 'id'=>'baudrate']) ?>

    <?= $form->field($model, 'stopbits')->textInput(['readonly'=>($model->type == 'serial')? false : true, 'id'=>'stopbits']) ?>

    <?= $form->field($model, 'databits')->textInput(['readonly'=>($model->type == 'serial')? false : true, 'id'=>'databits']) ?>

    <?= $form->field($model, 'parity')->dropDownList(['0' => 'none', '1' => 'even', '2' => 'odd'],['readonly'=>($model->type == 'serial')? false : true, 'id'=>'parity']) ?>

    <?= $form->field($model, 'polltime',[
        'addon' => ['append' => ['content'=>'Seconds']]
    ])->textInput() ?>
    <?= $form->field($model, 'debug')->checkbox() ?>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>

        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?> </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
