<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsAstro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-astro-form col-md-offset-1 col-md-4">
<legend>Astro and Location</legend>
<!--    <hr>-->
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
            'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]); ?>
    <?= $form->field($model, 'timezone')->dropDownList([255 => 'Automatic', -12 => "-12", -11 => "-11", -10 => "-10", -9 => "-9 = AKST", -8 => "-8 = PST", -7 => "-7 = MST", -6 => "-6 = CST", -5 => "-5", -4 => "-4", -3 => "-3 =  ADT", -2 => "-2", -1 => "-1 = EGT", 0 => "0 = GMT/UTC/WET", 1 => "+1 = CET/IST", 2 => "+2 = EET", 3 => "+3", 4 => "+4 = MSD", 5 => "+5", 6 => "+6", 7 => "+7", 8 => "+8 = HKT/PHT/SGT", 9 => "+9 = JST/KST/MYT", 10 => "+10 = PGT", 11 => "+11", 12 => "+12 = FJT/NZST", 13 => "+13 = WST"]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'twilight')->dropDownList(['nautical' => 'nautical', 'civil' => 'civil', 'astronomical' => 'astronomical']);?>

    <?= $form->field($model, 'seasons')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seasonstarts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temperature')->dropDownList(['°C' => '°C', '°F' => '°F']);?>

    <?= $form->field($model, 'currency')->dropDownList(['€' => '€', '$' => '$']) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
