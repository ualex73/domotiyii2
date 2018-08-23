<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'enabled')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'log')->textInput() ?>

    <?= $form->field($model, 'firstrun')->textInput() ?>

    <?= $form->field($model, 'lastrun')->textInput() ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'trigger_id')->textInput() ?>

    <?= $form->field($model, 'condition1_id')->textInput() ?>

    <?= $form->field($model, 'operand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condition2_id')->textInput() ?>

    <?= $form->field($model, 'rerunenabled')->textInput() ?>

    <?= $form->field($model, 'rerunvalue')->textInput() ?>

    <?= $form->field($model, 'reruntype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
