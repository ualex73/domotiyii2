<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Devices;
/* @var $this yii\web\View */
/* @var $model app\models\SettingsPvoutput */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-pvoutput-form">
<legend>PVOutput</legend> <jumbotron>
        <div style="margin-right: 5px">
            <a href="http://www.pvoutput.org/list.jsp?sid='.<?= $model->pvoutputid?>" target="_blank" class="btn btn-success">Your PVOutput Page</a>
        </div>
    </jumbotron>

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'api')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pvoutputid')->input('input') ?>



    <?= $form->field($model, 'deviceid')->dropDownList([ArrayHelper::map(Devices::find()->all(),'id','name')]); ?>

    <?= $form->field($model, 'devicevalue')->dropDownList(['0' => '', '1' => 'Value1', '2' => 'Value2', '3' => 'Value3', '4' => 'Value4']); ?>

    <?= $form->field($model, 'usagedeviceid')->dropDownList([ArrayHelper::map(Devices::find()->all(),'id','name')]); ?>

    <?= $form->field($model, 'usagedevicevalue')->dropDownList(['0' => '', '1' => 'Value1', '2' => 'Value2', '3' => 'Value3', '4' => 'Value4']); ?>

    <?= $form->field($model, 'tempdeviceid')->dropDownList([ArrayHelper::map(Devices::find()->all(),'id','name')]); ?>

    <?= $form->field($model, 'tempdevicevalue')->dropDownList(['0' => '', '1' => 'Value1', '2' => 'Value2', '3' => 'Value3', '4' => 'Value4']); ?>

    <?= $form->field($model, 'pushtime',[
        'addon' => ['append' => ['content'=>'Minutes']]
    ])->input('number') ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
