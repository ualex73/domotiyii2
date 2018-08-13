<?php

use yii\helpers\Html;
use app\components\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsAstro */
/* @var $form ActiveForm */
?>
<div class="settings-astro">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'timezone') ?>
        <?= $form->field($model, 'debug') ?>
        <?= $form->field($model, 'dst') ?>
        <?= $form->field($model, 'latitude') ?>
        <?= $form->field($model, 'longitude') ?>
        <?= $form->field($model, 'twilight') ?>
        <?= $form->field($model, 'seasons') ?>
        <?= $form->field($model, 'seasonstarts') ?>
        <?= $form->field($model, 'temperature') ?>
        <?= $form->field($model, 'currency') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- settings-astro -->
