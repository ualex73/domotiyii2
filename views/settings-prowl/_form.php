<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\SettingsProwl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-prowl-form col-md-offset-1 col-md-5">
    <legend>Prowl App</legend>
    <jumbotron>
        <div style="margin-right: 5px;">
            <a href="<?php echo Url::to(['send-prowl'])?>" class="btn btn-warning" >Send test PushMsg</a>
            <a href="http://www.prowlapp.com" class="btn btn-danger " target="_blank">Prowl</a>
            <a href="https://www.prowlapp.com/login.php" class="btn btn-info" target="_blank">Your Prowl</a>
            <a href="https://www.prowlapp.com/register.php" class="btn btn-success" target="_blank">Register for API</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'apikey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'application')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
