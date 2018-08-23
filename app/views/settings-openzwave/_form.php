<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOpenzwave */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-openzwave-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true,'class'=>'span5']) ?>

    <?= $form->field($model, 'baudrate')->dropDownList(['9600' => '9600', '19200' => '19200', '38400' => '38400', '57600' => '57600', '115200' => '115200']) ?>


    <?= $form->field($model, 'polltime',[
        'addon' => ['append' => ['content'=>'Milliseconds']]
    ])->input('number') ?>

    <?= $form->field($model, 'enablepollsleeping')->checkbox() ?>
    <?= $form->field($model, 'polltimesleeping')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'enablepolllistening')->checkbox() ?>

    <?= $form->field($model, 'polltimelistening')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enableupdateneighbor')->checkbox() ?>
    <?= $form->field($model, 'reloadnodes')->checkbox() ?>
    <?= $form->field($model, 'updateneighbor')->checkbox() ?>


    <?= $form->field($model, 'debug')->checkbox() ?>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
