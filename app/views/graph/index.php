<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\GraphSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Graphs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="graphs-index">
    <jumbotron>
        <div>
            <a href="../graph/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../graph/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $model= new \app\models\Graphs();
        echo $this->render('_search',['model'=>$model]
        ); ?>
    </div>
    <div class="clearfix"></div>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'enabled',
                'label'=>Yii::t('app','Enabled'),
                'value'=>function($data){
                    if($data->enabled==1){
                        return '<span class="fa fa-check"></span>';
                    }
                },
                'format'=>'raw',
            ],
//            'id',
            'name',

            [
                'attribute'=>  'type',
                'format'=>'raw',
                'value'=>function($data){
                    return $data->getGraphType($data->type);
                }
            ],
            'description',

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