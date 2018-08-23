<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\SettingsPushover */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-pushover-form col-md-offset-1 col-md-8">
    <legend>Pushover</legend>
    <jumbotron>
        <div style="margin-right: 5px;">
            <a href="<?php echo Url::to(['send-pushover'])?>" class="btn btn-warning" >Send test PushMsg</a>
            <a href="https://pushover.net" class="btn btn-danger " target="_blank">Pushover</a>
            <a href="https://pushover.net/login" class="btn btn-info" target="_blank">Your Pushover</a>
            <a href="https://pushover.net/login" class="btn btn-success" target="_blank">Register for API</a>
        </div>
    </jumbotron>

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'device')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
