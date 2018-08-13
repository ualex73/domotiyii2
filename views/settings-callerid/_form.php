<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsCallerid */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-callerid-form col-md-offset-1 col-md-8">
    <legend>CallerID</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'countrycode')->input('number') ?>

    <?= $form->field($model, 'areacode')->input('number') ?>

    <?= $form->field($model, 'prefixnational')->input('number') ?>

    <?= $form->field($model, 'prefixinternational')->input('number') ?>

    <?= $form->field($model, 'autocreatecontacts')->checkbox() ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
