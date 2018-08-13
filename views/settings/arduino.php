<?php

use yii\helpers\Html;
use app\components\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsArduino */
/* @var $form ActiveForm */
?>
<div class="settings-arduino">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'enabled') ?>
        <?= $form->field($model, 'polltime') ?>
        <?= $form->field($model, 'debug') ?>
        <?= $form->field($model, 'serialport') ?>
        <?= $form->field($model, 'baudrate') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- settings-arduino -->
