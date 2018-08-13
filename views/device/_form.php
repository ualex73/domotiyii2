<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Devices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devices-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <p> Fields with * are required.</p>
    <nav>
        <ul>
            <li><a href="">Main</a></li>
            <li><a href="">Values</a></li>
            <li><a href="" >Icons </a></li>
            <li><a href="">Location</a></li>
            <li><a href="">Options</a></li>
        </ul>
    </nav>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'instance_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'devicetype_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'onicon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'officon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dimicon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interface_id')->textInput() ?>

    <?= $form->field($model, 'firstseen')->textInput() ?>

    <?= $form->field($model, 'lastseen')->textInput() ?>



    <?= $form->field($model, 'hide')->textInput() ?>

    <?= $form->field($model, 'groups')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batterystatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tampered')->textInput() ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'switchable')->textInput() ?>

    <?= $form->field($model, 'dimable')->textInput() ?>

    <?= $form->field($model, 'extcode')->textInput() ?>

    <?= $form->field($model, 'x')->textInput() ?>

    <?= $form->field($model, 'y')->textInput() ?>

    <?= $form->field($model, 'floorplan_id')->textInput() ?>

    <?= $form->field($model, 'lastchanged')->textInput() ?>

    <?= $form->field($model, 'repeatstate')->textInput() ?>

    <?= $form->field($model, 'repeatperiod')->textInput() ?>

    <?= $form->field($model, 'reset')->textInput() ?>

    <?= $form->field($model, 'resetperiod')->textInput() ?>

    <?= $form->field($model, 'resetvalue')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poll')->textInput() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
