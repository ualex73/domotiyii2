<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOpentherm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-opentherm-form col-md-offset-1 col-md-6">

    <legend>OpenTherm</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'type')->dropDownList(['serial' => 'serial', 'tcp' => 'tcp'],['onchange'=>'switchType(this);']) ?>

    <?= $form->field($model, 'tcphost')->textInput(['maxlength' => true,'readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcphost']) ?>

    <?= $form->field($model, 'tcpport')->input('number',['readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcpport']) ?>
    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true,'readonly'=>($model->type == 'serial')? false : true, 'id'=>'serialport']) ?>

    <?= $form->field($model, 'temperatureoverride')->dropDownList(['Constant' => 'Constant', 'Temporarily' => 'Temporarily']) ?>


    <?= $form->field($model, 'thermostat')->dropDownList(['Other' => 'Other', 'Remeha Celcia' => 'Remeha Celcia']) ?>

    <?= $form->field($model, 'syncclock')->checkbox() ?>

    <?= $form->field($model, 'relayenabled')->checkbox(['onchange'=>'switchRelay(this);']) ?>



    <?= $form->field($model, 'polltime',[
    'addon' => ['append' => ['content'=>'Seconds']]
]
)->input('number') ?>





    <?= $form->field($model, 'relayenabled')->textInput() ?>

    <?= $form->field($model, 'relayport')->textInput(['readonly'=>($model->relayenabled <> 0)? false : true, 'id'=>'relayport']) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
