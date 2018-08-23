<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SettingsMqttSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-mqtt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'tcphost') ?>

    <?= $form->field($model, 'tcpport') ?>

    <?= $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'pubtopic') ?>

    <?php // echo $form->field($model, 'subtopic') ?>

    <?php // echo $form->field($model, 'heartbeat') ?>

    <?php // echo $form->field($model, 'retain') ?>

    <?php // echo $form->field($model, 'qos') ?>

    <?php // echo $form->field($model, 'debug') ?>

    <?php // echo $form->field($model, 'clientname') ?>

    <?php // echo $form->field($model, 'enablepublish') ?>

    <?php // echo $form->field($model, 'enablesubscribe') ?>

    <?php // echo $form->field($model, 'sslenabled') ?>

    <?php // echo $form->field($model, 'sslcertificate_id') ?>

    <?php // echo $form->field($model, 'birthlastwill') ?>

    <?php // echo $form->field($model, 'sendallvalues') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
