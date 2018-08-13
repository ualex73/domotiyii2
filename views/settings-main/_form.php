<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsMain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-main-form col-md-offset-1 col-md-6">
    <legend>Main</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'sleeptime',[
    'addon' => ['append' => ['content'=>'mS']]
])->input('number') ?>

    <?= $form->field($model, 'flushtime',[
        'addon' => ['append' => ['content'=>'mS']]
    ])->input('number') ?>

    <?= $form->field($model, 'logbuffer',[
        'addon' => ['append' => ['content'=>'Chars']]
    ])->input('number') ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <?= $form->field($model, 'authentication')->checkbox() ?>

    <?= $form->field($model, 'debugevents')->checkbox() ?>

    <?= $form->field($model, 'debugdevices')->checkbox() ?>

    <?= $form->field($model, 'debugenergy')->checkbox() ?>

    <?= $form->field($model, 'autodevicecreate')->checkbox() ?>

    <?= $form->field($model, 'logallvalueupdates')->checkbox() ?>

    <?= $form->field($model, 'startpage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logprefix')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
