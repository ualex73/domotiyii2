<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsXively */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-xively-form col-md-offset-1 col-md-4">
    <legend>Xively</legend>
    <jumbotron>
        <div style="margin-right: 5px">
            <a href="<?= \yii\helpers\Url::to('update');?>" target="_blank" class="btn btn-success">Settings</a>
            <a href="<?= \yii\helpers\Url::to('devicexively\index');?>" target="_blank" class="btn btn-info">Devices</a>
            <a href="https://xively.com/feeds/<?= $model->feed?>" target="_blank" class="btn btn-warning">Your Xively Feed</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'feed')->textInput() ?>

    <?= $form->field($model, 'apikey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pushtime',[
        'addon' => ['append' => ['content'=>'Minutes']]
    ])->textInput() ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
