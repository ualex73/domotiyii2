<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\SettingsJsonrpc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-jsonrpc-form col-md-offset-1 col-md-8">
    <legend> JSON RPC</legend>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'httpport')->input('number') ?>

    <?= $form->field($model, 'maxconn')->input('number') ?>


    <?= $form->field($model, 'auth')->checkbox() ?>

    <?= $form->field($model, 'sslenabled')->checkbox() ?>
    <?= $form->field($model, 'sslcertificate_id')->dropDownList([ArrayHelper::map(\app\models\Sslcertificates::find()->all(),'id','name')]);?>

    <?= $form->field($model, 'debug')->checkbox() ?>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
