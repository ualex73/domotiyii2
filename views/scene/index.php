<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\SceneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Scenes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scenes-index">

    <jumbotron>
        <div>
            <a href="../scene/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="#" class="btn btn-warning search-button"><span class="fa fa-search"></span> Search</a>
            <a href="../scene/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $model= new \app\models\search\SceneSearch();
        echo $this->render('_search',['model'=>$model]
        ); ?>
    </div>
    <div class="clearfix"></div>
    <?php Pjax::begin(); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'enabled',
            'name',
//            'log',
//            'firstrun',
            'lastrun',
            'comments:ntext',
            //'category',
            //'location_id',
            //'event_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
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