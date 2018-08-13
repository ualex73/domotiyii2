<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsVisonic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-visonic-form col-md-offset-1 col-md-6">

    <legend>Visonic Security Panel</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true,['class'=>'span5']]) ?>

    <?= $form->field($model, 'mastercode')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autosynctime')->checkbox() ?>

    <?= $form->field($model, 'forcestandardmode')->checkbox() ?>

    <?= $form->field($model, 'motiontimeout',[
            'addon' => ['append' => ['content'=>'Seconds']]
        ]
    )->textInput() ?>

    <?= $form->field($model, 'sensorarmstatus')->textInput() ?>

    <?= $form->field($model, 'debug')->checkbox() ?>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>

        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
