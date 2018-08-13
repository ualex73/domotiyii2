<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsMqtt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-mqtt-form col-md-offset-1 col-md-6">
    <legend>MQTT</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'tcphost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tcpport')->input('number') ?>

    <?= $form->field($model, 'clientname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'enablepublish')->checkbox() ?>

    <?= $form->field($model, 'pubtopic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enablesubscribe')->checkbox() ?>



    <?= $form->field($model, 'subtopic')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'heartbeat',[
        'addon' => ['append' => ['content'=>'Seconds']]
    ])->input('number') ?>

    <?= $form->field($model, 'retain')->checkbox() ?>

    <?= $form->field($model, 'qos')->textInput() ?>

    <?= $form->field($model, 'sslenabled')->checkbox() ?>

    <?= $form->field($model, 'sslcertificate_id')->textInput() ?>

    <?= $form->field($model, 'birthlastwill')->checkbox() ?>

    <?= $form->field($model, 'sendallvalues')->checkbox() ?>

    <?= $form->field($model, 'debug')->checkbox() ?>





    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
