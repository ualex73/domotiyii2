<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsNetworkdetect */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-networkdetect-form col-md-offset-1 col-md-6">

    <legend>NetworkDetect</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'polltime',[
            'addon' => ['append' => ['content'=>'Seconds']]
        ]
    )->textInput() ?>

    <?= $form->field($model, 'enable_ping')->checkbox() ?>

    <?= $form->field($model, 'enable_arpscan')->checkbox() ?>

    <?= $form->field($model, 'timeout',[
    'addon' => ['append' => ['content'=>'mS']]
]
)->input('number') ?>

    <?= $form->field($model, 'interface')->textInput(['maxlength' => true,'class'=>'span1']) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>


        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
