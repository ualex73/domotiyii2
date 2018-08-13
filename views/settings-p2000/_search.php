<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsP2000Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-p2000-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'regios') ?>

    <?= $form->field($model, 'messages') ?>

    <?= $form->field($model, 'discipline') ?>

    <?php // echo $form->field($model, 'filter') ?>

    <?php // echo $form->field($model, 'georange') ?>

    <?php // echo $form->field($model, 'fetchimage') ?>

    <?php // echo $form->field($model, 'maplink') ?>

    <?php // echo $form->field($model, 'polltime') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
