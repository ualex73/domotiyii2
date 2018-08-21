<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsRazberry */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="settings-razberry-form col-md-offset-1 col-md-4">

    <legend>RaZberry</legend>
    <jumbotron>
        <div style="margin-right: 5px;">
            <a target="_blank" href="http://<?= $model->tcphost;?>:<?=$model->tcpport;?>" class="btn btn-warning" ><span class="fa fa-globe"></span> Your RaZberry</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'tcphost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tcpport')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'polltime',[
            'addon' => ['append' => ['content'=>'Seconds']]
        ]
    )->textInput() ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>


            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
