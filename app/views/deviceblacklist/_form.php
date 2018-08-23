<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Deviceblacklist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deviceblacklist-form col-md-offset-1 col-md-4">
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'address')->textInput() ?>

    <?= $form->field($model, 'comments')->textInput() ?>

    <?= $form->field($model, 'id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Plugins::find()->all(),'id','name'),['prompt'=>'Select']) ?>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default','buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Reset']) ?>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
