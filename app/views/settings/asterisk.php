<?php

use yii\helpers\Html;
use app\components\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsAsterisk */
/* @var $form ActiveForm */
?>
<div class="settings-asterisk">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'enabled') ?>
        <?= $form->field($model, 'tcpport') ?>
        <?= $form->field($model, 'polltime') ?>
        <?= $form->field($model, 'debug') ?>
        <?= $form->field($model, 'tcphost') ?>
        <?= $form->field($model, 'user') ?>
        <?= $form->field($model, 'password') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- settings-asterisk -->
