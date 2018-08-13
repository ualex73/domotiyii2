<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsMysensors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-mysensors-form col-md-offset-1 col-md-4">

    <legend>MySensors</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'type')->dropDownList(['serial' => 'serial', 'tcp' => 'tcp']) ?>

    <?= $form->field($model, 'tcphost')->textInput(['maxlength' => true,'readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcphost']) ?>

    <?= $form->field($model, 'tcpport')->input('number',['readonly'=>($model->type == 'serial')? true : false, 'id'=>'tcpport']) ?>
    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'baudrate')->dropDownList(['9600' => '9600', '19200' => '19200', '38400' => '38400', '57600' => '57600', '115200' => '115200']) ?>



    <?= $form->field($model, 'relayport')->input('number',['readonly'=>($model->relayenabled == false)? true : false, 'id'=>'relayport']) ?>

    <?= $form->field($model, 'useack')->checkbox() ?>

    <?= $form->field($model, 'heartbeat')->input('number',['readonly'=>($model->type == 'tcp')? false : true, 'id'=>'heartbeat']) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
