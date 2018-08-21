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
    <jumbotron>
        <div style="margin-bottom: 10px">
            <a href="../device/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="#" class="btn btn-warning search-button"><span class="fa fa-search"></span> Search</a>
            <a href="../device/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $model = new \app\models\search\DeviceSearch();
        echo $this->render('_search', ['model' => $model]
        ); ?>
    </div>
<!--    --><?php //Pjax::begin(); ?>
    <div class="tab " role="tabpanel">
        <ul class="nav nav-tabs session-tab-ul" role="tablist">
            <?php $currentPath = Yii::$app->request->getUrl(); ?>
            <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/device/index') {
                echo 'active';
            }
            ?>"><a href='../device/index'>
                    All</a></li>
            <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/device/index?type=sensors') {
                echo 'active';
            } ?>"><a href='../device/index?type=sensors'>
                    Sensors</a></li>
            <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/device/index?type=dimmers') {
                echo 'active';
            } ?>"><a href='../device/index?type=dimmers'>
                    Dimmers</a></li>
            <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/device/index?type=switches') {
                echo 'active';
            } ?>"><a href='../device/index?type=switches'>
                    Switches</a></li>
            <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/device/index?type=hidden') {
                echo 'active';
            } ?>"><a href='../device/index?type=hidden'>
                    Hidden</a></li>
            <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/device/index?type=disabled') {
                echo 'active';
            } ?>"><a href='../device/index?type=disabled'>
                    Disabled</a></li>
        </ul>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'name',
                'label' => Yii::t('app', 'Name'),
            ],
            [
                'attribute' => 'enabled',
                'label' => Yii::t('app', 'Enabled'),
                'value' => function ($data) {
                    if ($data->enabled == 1) {
                        return '<span class="fa fa-check"></span>';
                    }
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'hide',
                'label' => Yii::t('app', 'Hidden'),
                'value' => function ($data) {
                    if ($data->hide == 0) {
                        return '<span class="fa fa-ch"></span>';
                    } else {
                        return '<span class="fa fa-check"></span>';
                    }
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'location_id',
                'label' => Yii::t('app', 'Location'),
                'value' => function ($data) {
                    if ($data->location) {
                        return $data->location->name;
                    }
                }
            ],
            [
                'attribute' => 'devicetype_id',
                'format' => 'raw',
                'value' => function ($data) {
                    if ($data->deviceType) {
                        return $data->deviceType->name;
                    }
                }
            ],
            [
                'attribute' => 'interface_id',
                'label' => Yii::t('app', 'Interface'),
                'value' => function ($data) {
                    if ($data->interface) {
                        return $data->interface->interface;
                    }
                }
            ],

            //'location_id',
            //'onicon',
            //'officon',
            //'dimicon',
            //'interface_id',
            //'firstseen',
            'lastseen',
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
<!--    --><?php //Pjax::end(); ?>
</div>
<script>
    $(document).ready(function(){
        $('.session-tab-ul.session-tab-li').on('click', function(){
            //alert('clicked');
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<style>
    .tab .nav-tabs {
        padding-left: 15px;
        border-bottom: 4px solid #333;
    }

    .tab .nav-tabs li a {
        color: #fff;
        padding: 10px 15px;
        margin-right: 10px;
        background: #333;
        text-shadow: 1px 1px 2px #000;
        border: none;
        border-radius: 0;
        opacity: 0.5;
        position: relative;
        transition: all 0.3s ease 0s;
    }

    .tab .nav-tabs li a:hover {
        background: #333;
        opacity: 0.8;
    }

    .tab .nav-tabs li.active a {
        opacity: 1;
    }

    .tab .nav-tabs li.active a,
    .tab .nav-tabs li.active a:hover,
    .tab .nav-tabs li.active a:focus {
        color: #fff;
        background: #333;
        border: none;
        border-radius: 0;
    }

    .tab .nav-tabs li a:before,
    .tab .nav-tabs li a:after {
        content: "";
        border-top: 42px solid transparent;
        position: absolute;
        top: -2px;
    }

    .tab .nav-tabs li a:before {
        border-right: 15px solid #333;
        left: -15px;
    }

    .tab .nav-tabs li a:after {
        border-left: 15px solid #333;
        right: -15px;
    }

    .tab .nav-tabs li a i,
    .tab .nav-tabs li.active a i {
        display: inline-block;
        padding-right: 5px;
        font-size: 15px;
        text-shadow: none;
    }

    .tab .nav-tabs li a span {
        display: inline-block;
        font-size: 14px;
        letter-spacing: -9px;
        opacity: 0;
        transition: all 0.3s ease 0s;
    }

    .tab .nav-tabs li a:hover span,
    .tab .nav-tabs li.active a span {
        letter-spacing: 1px;
        opacity: 1;
        transition: all 0.3s ease 0s;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('.search-button').click(function () {
            $('.search-form').slideToggle('fast');
            return false;
        });
        $('.search-form form').submit(function () {
            $.fn.yiiGridView.update('all-contacts-grid', {
                data: $(this).serialize()
            });
            return false;
        });

        $('.create-button').click(function () {
            $('.search-button').hide();
            $('.search-form').hide();
            $('.create-form').slideToggle('fast');
            return false;
        });
        $('.search-form form').submit(function () {
            $.fn.yiiGridView.update('all-contacts-grid', {
                data: $(this).serialize()
            });
            return false;
        });

    });
</script>
<style>
    table {
        margin-top: 10px;
    }
</style>