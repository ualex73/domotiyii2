<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsMainSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-main-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sleeptime') ?>

    <?= $form->field($model, 'flushtime') ?>

    <?= $form->field($model, 'debug') ?>

    <?= $form->field($model, 'logbuffer') ?>

    <?php // echo $form->field($model, 'authentication') ?>

    <?php // echo $form->field($model, 'startpage') ?>

    <?php // echo $form->field($model, 'debugevents') ?>

    <?php // echo $form->field($model, 'debugdevices') ?>

    <?php // echo $form->field($model, 'debugenergy') ?>

    <?php // echo $form->field($model, 'debugplugin') ?>

    <?php // echo $form->field($model, 'debugglobalvar') ?>

    <?php // echo $form->field($model, 'hometoppanel') ?>

    <?php // echo $form->field($model, 'homeleftpanel') ?>

    <?php // echo $form->field($model, 'homerightpanel') ?>

    <?php // echo $form->field($model, 'homebottompanel') ?>

    <?php // echo $form->field($model, 'autodevicecreate') ?>

    <?php // echo $form->field($model, 'logallvalueupdates') ?>

    <?php // echo $form->field($model, 'logprefix') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
