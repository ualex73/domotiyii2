<?php

use yii\helpers\Html;
use domotiyii2\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
/*
use app\components\MyActiveForm;
use app\components\MyActiveField;
*/
use yii\helpers\Url;

/* $this->title = 'CUL Settings'; */
/* $this->params['breadcrumbs'] = [['label' => 'CUL', 'url' => 'indexPlugins'],'alex']; */

/* @var $this yii\web\View */
/* @var $model app\models\SettingsCul */
/* @var $form ActiveForm */
?>
<div class="settings-cul">

    <legend>CUL - CC1101 USB Lite
        <?php
            /* Only show instancelist if we support multiple instances */
            if ($instancelist) {
                echo Html::dropDownList('category', $model->id, $instancelist, ['style' => 'float:right;', 'class' => 'form-group', 'onchange' => 'myFunction("'.Url::to(['']).'",this.value);']);
            }
        ?>
    </legend>

    <?php $form = ActiveForm::begin(['layout' => 'horizontal',
'layoutType' => 'lexlexlex',
'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'offset' => 'col-sm-offset-2',
            'wrapper' => 'col-sm-2',
            'error' => '',
            'hint' => '',
        ],
    ],
]); ?>

        <div class="hide">
            <?= $form->field($model, 'id') ?>
        </div>

        <?= $form->field($model, 'enabled')->checkbox() ?>
        <?= $form->field($model, 'type')->dropDownList(['serial' => 'serial', 'tcp' => 'tcp'],['onchange'=>'switchType(this.value);']) ?>
        <?= $form->field($model, 'tcphost')->textInput(['id' => 'tcphost', 'readonly' => ($model->type == 'tcp')? false : true]) ?>
        <?= $form->field($model, 'tcpport')->textInput(['type' => 'number', 'id' => 'tcpport', 'readonly' => ($model->type == 'tcp')? false : true]) ?>
        <?= $form->field($model, 'serialport')->textInput(['id' => 'serialport', 'readonly' => ($model->type == 'serial')? false : true]) ?>
        <?= $form->field($model, 'baudrate')->dropDownList(['9600' => '9600', '19200' => '19200', '38400' => '38400', '57600' => '57600', '115200' => '115200'],['id' => 'baudrate', 'style' => 'width:150px;', 'disabled' => ($model->type == 'serial')? false : true]) ?>
        <?= $form->field($model, 'model')->dropDownList(['1' => 'CUL', '2' => 'CUN', '3' => 'CUNO', '4' => 'CUR']) ?>
        <?= $form->field($model, 'fhtid')->textInput(['type' => 'number']) ?>
        <?= $form->field($model, 'debugbool')->checkbox()  ?>

        <legend></legend>
<?php
            Modal::begin([
                'toggleButton' => [
                    'label' => '<i class="glyphicon glyphicon-plus"></i> Add',
                    'class' => 'btn btn-success'
                ],
                'closeButton' => [
                  'label' => 'Close',
                  'class' => 'btn btn-danger btn-sm pull-right',
                ],
                'size' => 'modal-lg',
            ]);
/*
            $myModel = new \app\models\SettingsCul;
            $instancelist = null;
            echo $this->render('cull', ['model' => $myModel, 'instancelist' => $instancelist]);
*/
            Modal::end();
?>
    <?php Pjax::begin(['enablePushState' => false]); ?>
    <?= Html::a('', ['/settings/cull'], ['class' => 'btn btn-lg btn-warning glyphicon glyphicon-arrow-up']) ?>
    <?= Html::a('', ['site/downvote'], ['class' => 'btn btn-lg btn-primary glyphicon glyphicon-arrow-down']) ?>
    <h1><?= Yii::$app->session->get('votes', 0) ?></h1>
    <?php Pjax::end(); ?>
        <legend></legend>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-6">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div><!-- settings-cul -->
