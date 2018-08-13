<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsP2000 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-p2000-form">
    <legend>P200 Scanner</legend>
    <jumbotron>
        <div style="margin-left:5px">
            <a href="http://monitor.livep2000.nl/" target="_blank" class="btn btn-info">P2000 Live</a>
        </div>
    </jumbotron>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>


    <?= $form->field($model, 'enabled')->checkbox() ?>

    <?= $form->field($model, 'regios')->dropDownList(['0'=>'Alle', '13'=>'Amsterdam-Amstelland', '21'=>'Brabant Noord', '22'=>'Brabant Zuid en Oost', '3'=>'Drenthe', '25'=>'Flevoland', '2'=>'Friesland', '7'=>'Gelderland Midden', '8'=>'Gelderland Zuid', '14'=>'Gooi en Vechtstreek', '1'=>'Groningen', '15'=>'Haaglanden', '16'=>'Hollands Midden', '4'=>'IJsselland', '12'=>'Kennemerland', '23'=>'Limburg Noord', '24'=>'Limburg Zuid', '20'=>'Midden- en West-Brabant', '18'=>'Zuid Holland Zuid', '6'=>'Noord en Oost Gelderland', '10'=>'Noord Holland Noord', '17'=>'Rotterdam Rijnmond', '5'=>'Twente', '9'=>'Utrecht', '11'=>'Zaanstreek-Waterland', '19'=>'Zeeland']); ?>

    <?= $form->field($model, 'discipline')->dropDownList(['0'=>'Alle', '1'=>'Ambulance', '2'=>'Brandweer', '3'=>'Politie', '4' => 'KNMR']) ?>

    <?= $form->field($model, 'messages',[
        'addon' => ['append' => ['content'=>'Msgs']]
    ])->input('number') ?>

    <?= $form->field($model, 'filter')->textInput(['maxlength' => true]) ?>
    <p style="text-align: center">Only display messages containing this text</p>
    <?= $form->field($model, 'georange',[
        'addon' => ['append' => ['content'=>'Meters']]
    ])->input('number') ?>
    <p style="text-align: center">Enter 0 to disable range check</p>
    <?= $form->field($model, 'fetchimage')->checkbox() ?>

    <?= $form->field($model, 'maplink')->checkbox() ?>

    <?= $form->field($model, 'polltime',[
        'addon' => ['append' => ['content'=>'Seconds']]
    ])->input('number') ?>

    <?= $form->field($model, 'debug')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
