<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Actions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actions-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'param1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'param2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'param3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'param4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'param5')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
