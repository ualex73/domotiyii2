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

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Graphs'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'enabled',
            'comments',
            'graph_title',
            //'graph_height',
            //'graph_width',
            //'color_background',
            //'color_canvas',
            //'color_shadea',
            //'color_shadeb',
            //'color_font',
            //'color_grid',
            //'color_majorgrid',
            //'color_frame',
            //'color_axis',
            //'color_arrow',
            //'unit',
            //'logarithmic_scale',
            //'date',
            //'grid_type',
            //'groups',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
