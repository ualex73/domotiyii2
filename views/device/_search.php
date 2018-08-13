<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\DeviceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devices-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'instance_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'devicetype_id') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'onicon') ?>

    <?php // echo $form->field($model, 'officon') ?>

    <?php // echo $form->field($model, 'dimicon') ?>

    <?php // echo $form->field($model, 'interface_id') ?>

    <?php // echo $form->field($model, 'firstseen') ?>

    <?php // echo $form->field($model, 'lastseen') ?>

    <?php // echo $form->field($model, 'enabled') ?>

    <?php // echo $form->field($model, 'hide') ?>

    <?php // echo $form->field($model, 'groups') ?>

    <?php // echo $form->field($model, 'batterystatus') ?>

    <?php // echo $form->field($model, 'tampered') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'switchable') ?>

    <?php // echo $form->field($model, 'dimable') ?>

    <?php // echo $form->field($model, 'extcode') ?>

    <?php // echo $form->field($model, 'x') ?>

    <?php // echo $form->field($model, 'y') ?>

    <?php // echo $form->field($model, 'floorplan_id') ?>

    <?php // echo $form->field($model, 'lastchanged') ?>

    <?php // echo $form->field($model, 'repeatstate') ?>

    <?php // echo $form->field($model, 'repeatperiod') ?>

    <?php // echo $form->field($model, 'reset') ?>

    <?php // echo $form->field($model, 'resetperiod') ?>

    <?php // echo $form->field($model, 'resetvalue') ?>

    <?php // echo $form->field($model, 'poll') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
