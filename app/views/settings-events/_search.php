<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsEventsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'log') ?>

    <?= $form->field($model, 'firstrun') ?>

    <?php // echo $form->field($model, 'lastrun') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'trigger_id') ?>

    <?php // echo $form->field($model, 'condition1_id') ?>

    <?php // echo $form->field($model, 'operand') ?>

    <?php // echo $form->field($model, 'condition2_id') ?>

    <?php // echo $form->field($model, 'rerunenabled') ?>

    <?php // echo $form->field($model, 'rerunvalue') ?>

    <?php // echo $form->field($model, 'reruntype') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
