<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Devicevalues */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devicevalues-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'device_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valuenum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'correction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'units')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'log')->textInput() ?>

    <?= $form->field($model, 'logdisplay')->textInput() ?>

    <?= $form->field($model, 'logspeak')->textInput() ?>

    <?= $form->field($model, 'rrd')->textInput() ?>

    <?= $form->field($model, 'graph')->textInput() ?>

    <?= $form->field($model, 'valuerrddsname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valuerrdtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastchanged')->textInput() ?>

    <?= $form->field($model, 'lastseen')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'feedback')->textInput() ?>

    <?= $form->field($model, 'control')->textInput() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
