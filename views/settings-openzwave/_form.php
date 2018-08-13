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

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'enabled')->textInput() ?>

    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baudrate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reloadnodes')->textInput() ?>

    <?= $form->field($model, 'polltime')->textInput() ?>

    <?= $form->field($model, 'debug')->textInput() ?>

    <?= $form->field($model, 'polltimesleeping')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enablepollsleeping')->textInput() ?>

    <?= $form->field($model, 'enablepolllistening')->textInput() ?>

    <?= $form->field($model, 'polltimelistening')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updateneighbor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enableupdateneighbor')->textInput() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
