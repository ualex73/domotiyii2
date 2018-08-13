<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'admin') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'lastlogin') ?>

    <?php // echo $form->field($model, 'emailaddress') ?>

    <?php // echo $form->field($model, 'cookie') ?>

    <?php // echo $form->field($model, 'options') ?>

    <?php // echo $form->field($model, 'tfasecret') ?>

    <?php // echo $form->field($model, 'tfaenabled') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
