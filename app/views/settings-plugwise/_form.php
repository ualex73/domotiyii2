<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPlugwise */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-plugwise-form col-md-offset-1 col-md-6">
    <legend>Plugwise</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'serialport')->textInput(['maxlength' => true,'class'=>'span5']) ?>

    <?= $form->field($model, 'polltime',[
            'addon' => ['append' => ['content'=>'Seconds']]
        ]
    )->input('number') ?>

    <?= $form->field($model, 'busytime',[
    'addon' => ['append' => ['content'=>'mS']]
]
)->input('number') ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>

        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
