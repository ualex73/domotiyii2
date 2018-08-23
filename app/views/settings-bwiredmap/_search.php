<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsBwiredmapSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-bwiredmap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'website') ?>

    <?= $form->field($model, 'websitepicurl') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'screenname') ?>

    <?php // echo $form->field($model, 'gpslat') ?>

    <?php // echo $form->field($model, 'gpslong') ?>

    <?php // echo $form->field($model, 'pushtime') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
