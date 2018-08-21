<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CamerasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Device Cameras');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-cameras-index">
    <jumbotron>
        <div style="margin-bottom: 10px">
            <a href="../cameras/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="#" class="btn btn-warning search-button"><span class="fa fa-search"></span> Search</a>
            <a href="../cameras/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $model= new \app\models\search\CamerasSearch();
        echo $this->render('_search',['model'=>$model]
        ); ?>
    </div>
    <?php Pjax::begin(); ?>
    <div class="tab " role="tabpanel">
        <ul class="nav nav-tabs session-tab-ul" role="tablist">
            <?php $currentPath = Yii::$app->request->getUrl(); ?>
            <li class="session-tab-li <?php if ($currentPath == '/domoti-yii2/web/cameras/index') {
                echo 'active';
            }
            ?>"><a href='../cameras/index'>
                    All</a></li>
            <li class="session-tab-li <?php if ($currentPath == '/domoti-yii2/web/cameras/index?type=Enabled') {
                echo 'active';
            } ?>"><a href='../cameras/index?type=Enabled'>
                    Enabled</a></li>
            <li class="session-tab-li <?php if ($currentPath == '/domoti-yii2/web/cameras/index?type=Disabled') {
                echo 'active';
            } ?>"><a href='../cameras/index?type=Disabled'>
                    Disabled</a></li>
        </ul>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'type',
            'cmdoptions:ntext',
            'viewstring:ntext',
            //'grabstring:ntext',
            //'ptztype',
            //'ptzbaseurl:ntext',
            //'description',
            //'viscaaddress',
            //'username',
            //'passwd',
            //'enabled',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
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
    table{
        margin-top:10px;
    }
</style>