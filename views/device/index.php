<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DeviceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Devices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devices-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Devices'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'instance_id',
            'name',
            'address',
            'devicetype_id',
            //'location_id',
            //'onicon',
            //'officon',
            //'dimicon',
            //'interface_id',
            //'firstseen',
            //'lastseen',
            //'enabled',
            //'hide',
            //'groups',
            //'batterystatus',
            //'tampered',
            //'comments:ntext',
            //'switchable',
            //'dimable',
            //'extcode',
            //'x',
            //'y',
            //'floorplan_id',
            //'lastchanged',
            //'repeatstate',
            //'repeatperiod',
            //'reset',
            //'resetperiod',
            //'resetvalue:ntext',
            //'poll',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
