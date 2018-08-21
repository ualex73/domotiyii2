<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Devicevalues */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devicevalues-form col-md-offset-1 col-md-4">
    <p>Fields with <span style="color: red">*</span>  are required.</p>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'device_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Devices::find()->all(),'id','name'),['prompt'=>'Select']) ?>

    <?= $form->field($model, 'valuenum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value')->textInput() ?>
    
    <?= $form->field($model, 'units')->dropDownList(['°' => '°', '°C' => '°C', '°F' => '°F', '%' => '%', '€' => '€', '$' => '$', 'Amp' => 'Amp', 'Count' => 'Count', 'hPa' => 'hPa', 'Volt' => 'Volt', 'kWh' => 'kWh', 'km/h' => 'km/h', 'kg' => 'kg', 'W' => 'W', 'Wh' => 'Wh', 'Watt' => 'Watt', 'W/m2' => 'W/m2', 'Level' => 'Level', 'lb' => 'lb', 'lux' => 'lux', 'RSSI' => 'RSSI', 'm/s' => 'm/s', 'mbar' => 'mbar', 'mm' => 'mm', 'mm/hr' => 'mm/hr', 'm3' => 'm3', 'ppm' => 'ppm']) ?>
    <?= $form->field($model, 'valuerrddsname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valuerrdtype')->dropDownList(['GAUGE' => 'GAUGE', 'COUNTER' => 'COUNTER', 'DERIVE' => 'DERIVE', 'ABSOLUTE' => 'ABSOLUTE']) ?>
    <?= $form->field($model, 'correction')->textInput() ?>

    <?= $form->field($model, 'log')->checkbox() ?>

    <?= $form->field($model, 'logdisplay')->checkbox() ?>

    <?= $form->field($model, 'logspeak')->checkbox() ?>

    <?= $form->field($model, 'rrd')->checkbox() ?>

    <?= $form->field($model, 'graph')->checkbox() ?>

  
    <?= $form->field($model, 'lastchanged')->textInput() ?>

    <?= $form->field($model, 'lastseen')->textInput() ?>
    
    <?= $form->field($model, 'feedback')->checkbox() ?>

    <?= $form->field($model, 'control')->checkbox() ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
