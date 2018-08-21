<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cdr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cdr-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'calldate')->textInput() ?>

    <?= $form->field($model, 'clid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'src')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dcontext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'channel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dstchannel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastdata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'billsec')->textInput() ?>

    <?= $form->field($model, 'disposition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amaflags')->textInput() ?>

    <?= $form->field($model, 'accountcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userfield')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uniqueid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
