<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsK8055 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-k8055-form col-md-offset-1 col-md-6">

    <legend>K8055</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'polltime',[
            'addon' => ['append' => ['content'=>'Seconds']]
        ]
    )->input('number') ?>

    <?= $form->field($model, 'boardaddress')->input('number') ?>

    <?= $form->field($model, 'debouncetime1',[
            'addon' => ['append' => ['content'=>'mS']]
        ]
    )->input('number') ?>

    <?= $form->field($model, 'debouncetime2',[
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