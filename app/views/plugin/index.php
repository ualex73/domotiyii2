<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PluginSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Plugins');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plugins-index">

    <jumbotron>
        <div>
            <a href="../plugin/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="#" class="btn btn-warning search-button"><span class="fa fa-search"></span> Search</a>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $modelSearch= new \app\models\search\PluginSearch();
        echo $this->render('_search',['model'=>$modelSearch]
        ); ?>
    </div>
    <div class="clearfix"></div>
    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'interface',
            'protocols',


            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}',//{download}
                'buttons' => [
                    'update' => function ($url, $model, $key) {

                        return \yii\helpers\Html::a('',   ['view','id'=>$model->id], ['class' => 'glyphicon glyphicon-eye', 'title' => 'View', 'style' => 'margin-right:10px']);
                    },
                ],
            ],
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