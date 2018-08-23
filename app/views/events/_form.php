<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form  col-md-6">
    <p class="note"><?php echo Yii::t('app','Fields with <span style="color: red;">*</span> are required.') ?></p>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]); ?>
    <ul class="nav nav-tabs" role="tablist">
        <li><a class="main-button" href="#">Main</a>
        </li>
        <li><a class="trigger-button" href="#">Trigger</a></li>
        <li><a class="condition-button" href="#">Conditions</a></li>
        <li><a class="action-button" href="#">Actions</a></li>
        <li><a class="option-button" href="#">Options</a></li>


    </ul>
    <span class="main-form" style="display: none">
            <?= $form->field($model, 'enabled')->checkbox() ?>
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->orderBy('name')->all(), 'id', 'name')) ?>
            <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>
            </span>
    <span class="trigger-form" style="display: none">
        <?= $form->field($model, 'trigger_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Triggers::find()->orderBy('name')->all(), 'id', 'name')) ?>
    </span>
    <span class="condition-form" style="display: none">
        <?= $form->field($model, 'condition1_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Conditions::find()->all(),'id','name'),['prompt'=>'Select']) ?>

        <?= $form->field($model, 'operand')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'condition2_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Conditions::find()->all(),'id','name'),['prompt'=>'Select']) ?>

        <?= $form->field($model, 'rerunenabled')->checkbox() ?>

        <?= $form->field($model, 'rerunvalue')->textInput() ?>

        <?= $form->field($model, 'reruntype')->dropDownList(['gb.Second' => 'Seconds', 'gb.Minute' => 'Minutes', 'gb.Hour' => 'Hours', 'gb.Day' => 'Days', 'gb.Month' => 'Months', 'gb.Quarter' => 'Quarters', 'gb.Year' => 'Years']) ?>
    </span>
    <span class="action-form">
        <?php if($model->isNewRecord){?>
        <p><strong><b>This tab can't be used while the event is not created and saved !</b></strong> </p>
        <?php }else{
    return $this->render('_actions',['model' => $model]);
}?>
    </span>
    <span class="options-form">

         <?= $form->field($model, 'firstrun')->textInput() ?>

         <?= $form->field($model, 'lastrun')->textInput() ?>

         <?= $form->field($model, 'log')->checkbox() ?>

    </span>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('.main-form').show();
        $('.trigger-form').hide();
        $('.options-form').hide();
        $('.action-form').hide();
        $('.condition-form').hide();
        $('.trigger-button').click(function () {
            $('.main-form').hide();
            $('.options-form').hide();
            $('.action-form').hide();
            $('.condition-form').hide();
            $('.trigger-form').slideToggle('fast');
            return false;
        });
        $('.main-button').click(function () {
            $('.trigger-form').hide();
            $('.options-form').hide();
            $('.action-form').hide();
            $('.condition-form').hide();
            $('.main-form').slideToggle('fast');
            return false;
        });
        $('.option-button').click(function () {
            $('.main-form').hide();
            $('.trigger-form').hide();
            $('.action-form').hide();
            $('.condition-form').hide();
            $('.options-form').slideToggle('fast');
            return false;
        });
        $('.action-button').click(function () {
            $('.main-form').hide();
            $('.trigger-form').hide();
            $('.options-form').hide();
            $('.condition-form').hide();
            $('.action-form').slideToggle('fast');
            return false;
        });
        $('.condition-button').click(function () {
            $('.main-form').hide();
            $('.trigger-form').hide();
            $('.options-form').hide();
            $('.action-form').hide();
            $('.condition-form').slideToggle('fast');
            return false;
        });
    });
</script>
<style>
    .nav > li > a:hover, .nav > li > a:focus {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
    }
    .kv-form-horizontal .form-group {
        margin-bottom: 0;
        padding-top: 10px;
    }
</style>