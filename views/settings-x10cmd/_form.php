<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsX10cmd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-x10cmd-form col-md-offset-1 col-md-4">

    <legend>X10 Cmd</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'type')->dropDownList(['0' => 'CM11A (heyu)', '1' => 'CM15A (cm15ademo)', '2' => 'CM17A (heyu)']) ?>

    <?= $form->field($model, 'command')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monitor')->checkbox() ?>

    <?= $form->field($model, 'globalx10')->checkbox() ?>


    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
