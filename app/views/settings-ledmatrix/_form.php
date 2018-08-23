<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsLedmatrix */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-ledmatrix-form col-md-offset-1 col-md-4">

    <legend>LEDMatrix</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'displayid')->textInput() ?>
    <?= $form->field($model, 'color')->dropDownList(['0' => 'Dim Red', '1' => 'Red', '2' => 'Bright Red', '3' => 'Dim Green', '4' => 'Green', '5' => 'Bright Green', '6' => 'Dim Orange', '7' => 'Orange', '8' => 'Bright Orange', '9' => 'Yellow', '10' => 'Lime', '11' => 'Inversed Red', '12' => 'Inversed Orange', '13' => 'Red on Green Dim', '14' => 'Green on Red Dim', '15' => 'R/Y/G', '16' => 'Rainbow']) ?>

    <?= $form->field($model, 'speed')->dropDownList(['0' => '25%', '1' => '50%', '2' => '75%', '3' => '100%']) ?>


    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
