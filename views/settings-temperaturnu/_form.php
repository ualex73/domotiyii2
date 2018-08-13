<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Devices;
/* @var $this yii\web\View */
/* @var $model app\models\SettingsTemperaturnu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-temperaturnu-form col-md-offset-1 col-md-4">
        <legend>Temperaturnu</legend>
    <jumbotron>
        <div style="margin-right: 5px">
            <a href="http://www.temperatur.nu" target="_blank" class="btn btn-success">Temperatur.nu</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apikey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pushtime',[
        'addon' => ['append' => ['content'=>'Minutes']]
    ])->textInput() ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <?= $form->field($model, 'deviceid')->dropDownList([ArrayHelper::map(Devices::find()->all(),'id','name')]) ?>

    <?= $form->field($model, 'devicevalue')->dropDownList(['0' => '', '1' => 'Value1', '2' => 'Value2', '3' => 'Value3', '4' => 'Value4']) ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
