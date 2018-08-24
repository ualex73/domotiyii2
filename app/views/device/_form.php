<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Devices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devices-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]); ?>

    <p> Fields with <span style="color: red">*</span> are required.</p>
    <ul class="nav nav-tabs" role="tablist">
        <li><a class="main-button" href="#">Main</a>
        </li>
        <li><a class="trigger-button" href="#">Values</a></li>
        <li><a class="condition-button" href="#">Icons</a></li>
        <li><a class="action-button" href="#">Location</a></li>
        <li><a class="option-button" href="#">Options</a></li>
    </ul>

            <span class="main-form" style="display: none">
                <?= $form->field($model, 'enabled')->checkbox() ?>
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'instance_id')->input('number') ?>
            <?= $form->field($model, 'protocol')->dropDownList(ArrayHelper::map(\app\models\Devicetypes::find()->select('protocol')->distinct()->orderBy('protocol')->all(), 'protocol', 'protocol'),['prompt'=>'Select']) ?>
            <?= $form->field($model, 'devicetype_id')->dropDownList(ArrayHelper::map(\app\models\Devicetypes::find()->orderBy('name')->all(), 'id', 'name'),['prompt'=>'Select']) ?>
            <?= $form->field($model, 'interface_id')->dropDownList(ArrayHelper::map(\app\models\Plugins::find()->orderBy('name')->all(), 'id', 'name'),['prompt'=>'Select']) ?>
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
            </span>

            <span class="trigger-form">
                <?php
                if($model){
                    $query=\app\models\DeviceValues::find();

                    $dataProvider = new \yii\data\ActiveDataProvider([
                        'query' => $query,
                    ]);
                    $query->andFilterWhere(['device_id'=>$model->id]);
                }
                ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
            //        'filterModel' => $searchModel,
                    'columns' => [
            //            ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        [
                            'attribute'=>'valuenum',
                            'label'=>Yii::t('app','Valuenum'),
                        ],
                        [
                            'attribute'=>'value',
                            'label'=>Yii::t('app','Rawvalue'),
                        ],
                        [
                            'attribute'=>'units',
                            'label'=>Yii::t('app','Unit'),
                        ],
                        [
                            'attribute'=>'correction',
                            'label'=>Yii::t('app','Correction'),
                        ],

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </span>

            <span class="condition-form">

                <?= $form->field($model, 'onicon')->dropDownList($model->getIcons(),$model->getIconsOptions()) ?>
                <?= $form->field($model, 'dimicon')->dropDownList($model->getIcons(),$model->getIconsOptions()) ?>

                <?= $form->field($model, 'officon')->dropDownList($model->getIcons(),$model->getIconsOptions()) ?>

           </span>

            <span class="action-form">

            <?= $form->field($model, 'groups')->checkboxList($model->getGroups()) ?>
            <?= $form->field($model, 'floorplan_id')->dropDownList($model->getFloors()) ?>

            <?= $form->field($model, 'location_id')->dropDownList($model->getLocations()) ?>
            <?= $form->field($model, 'x')->textInput() ?>

            <?= $form->field($model, 'y')->textInput() ?>

        </span>

            <span class="options-form">
        <?= $form->field($model, 'switchable')->checkbox() ?>
        <?= $form->field($model, 'reset')->checkbox() ?>
        <?= $form->field($model, 'dimable')->checkbox() ?>

        <?= $form->field($model, 'extcode')->checkbox() ?>

        <?= $form->field($model, 'hide')->checkbox() ?>

        <?= $form->field($model, 'resetvalue')->textInput() ?>


        <?= $form->field($model, 'tampered')->input('number') ?>
        <?= $form->field($model, 'resetperiod', [
            'addon' => ['append' => ['content'=>'Minutes']],
        ])->input('number') ?>

        <?= $form->field($model, 'repeatstate')->checkbox() ?>

        <?= $form->field($model, 'repeatperiod', [
            'addon' => ['append' => ['content'=>'Minutes']],
        ])->input('number') ?>


        <?= $form->field($model, 'poll')->checkbox() ?>

    </span>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('.main-form').show();
        $('.trigger-form').hide();
        $('.options-form').hide();
        $('.action-form').hide();
        $('.condition-form').hide();
        $('.trigger-button').click(function () {
            $('.main-form').hide();
            $('.options-form').hide();
            $('.action-form').hide();
            $('.condition-form').hide();
            $('.trigger-form').show();
            return false;
        });
        $('.main-button').click(function () {
            $('.trigger-form').hide();
            $('.options-form').hide();
            $('.action-form').hide();
            $('.condition-form').hide();
            $('.main-form').show();
            return false;
        });
        $('.option-button').click(function () {
            $('.main-form').hide();
            $('.trigger-form').hide();
            $('.action-form').hide();
            $('.condition-form').hide();
            $('.options-form').show();
            return false;
        });
        $('.action-button').click(function () {
            $('.main-form').hide();
            $('.trigger-form').hide();
            $('.options-form').hide();
            $('.condition-form').hide();
            $('.action-form').show();
            return false;
        });
        $('.condition-button').click(function () {
            $('.main-form').hide();
            $('.trigger-form').hide();
            $('.options-form').hide();
            $('.action-form').hide();
            $('.condition-form').show();
            return false;
        });
    });
</script>
