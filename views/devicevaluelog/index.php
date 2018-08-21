<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DevicevaluelogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Devicevalueslogs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devicevalueslog-index">

    <jumbotron>
        <div>
            <a href="../devicevaluelog/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="#" class="btn btn-warning search-button"><span class="fa fa-search"></span> Search</a>
            <a href="../devicevaluelog/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $searchmodel= new \app\models\search\DevicevaluelogSearch();
        echo $this->render('_search',['model'=>$searchmodel]
        ); ?>
    </div>
    <div class="clearfix"></div>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
           'id',
            'device.name',
            'valuenum',
            'value:ntext',
            'lastchanged',

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