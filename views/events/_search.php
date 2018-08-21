<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\EventsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search col-md-offset-1 col-md-6">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL],
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'lastrun') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php  echo $form->field($model, 'trigger_id')->dropDownList($model->getAllTriggers(),['prompt'=>'Select']) ?>

    <?php // echo $form->field($model, 'condition1_id') ?>

    <?php // echo $form->field($model, 'operand') ?>

    <?php // echo $form->field($model, 'condition2_id') ?>

    <?php // echo $form->field($model, 'rerunenabled') ?>

    <?php // echo $form->field($model, 'rerunvalue') ?>

    <?php // echo $form->field($model, 'reruntype') ?>

    <?php  echo $form->field($model, 'category_id')->dropDownList($model->getAllCategories(),['prompt'=>'Select']) ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Reset'), 'index',['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
