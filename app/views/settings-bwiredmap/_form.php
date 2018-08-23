<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\SettingsBwiredmap */
/* @var $form kartik\form\ActiveForm */
?>

<div class="settings-bwiredmap-form col-md-offset-1 col-md-4">
<legend>BwiredMap</legend>
    <jumbotron>
        <div style="margin-right: 5px">
            <a href="<?php echo Url::to('update')?>" class="btn btn-info">Settings</a>
            <a href="<?php echo Url::to(['devicebwired/index'])?>" class="btn btn-warning">Devices</a>
            <a href="http://www.bwired.nl/domoticaworld.asp" target="_blank" class="btn btn-success">Bwired\'s DomoticaWorld</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'pushtime',[
        'addon' => ['append' => ['content'=>'Seconds']]
    ])->textInput() ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'websitepicurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'screenname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gpslat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gpslong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
