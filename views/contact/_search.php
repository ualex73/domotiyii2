<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ContactSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'zipcode') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'phoneno') ?>

    <?php // echo $form->field($model, 'mobileno') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'cidphone') ?>

    <?php // echo $form->field($model, 'cidmobile') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'holidaycard') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'firstname') ?>

    <?php // echo $form->field($model, 'surname') ?>

    <?php // echo $form->field($model, 'callnr') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'firstseen') ?>

    <?php // echo $form->field($model, 'lastseen') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
