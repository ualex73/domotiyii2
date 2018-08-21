<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CdrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Phonecalls');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdr-index">
    <?php Pjax::begin(); ?>
	<ul class="nav nav-tabs" role="tablist">
		<li><a class="main-button" href="index">All</a></li>
		<li><a class="trigger-button" href="incoming">Incoming</a></li>
		<li ><a class="condition-button" href="outgoing">Outgoing</a></li>
		<li class="active"><a class="action-button" href="no-answer">No Answer</a></li>
	</ul>
    <?= GridView::widget([
        'dataProvider' => $searchModel->search("noanswer"),
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'dcontext',
                'label'=>'Type',
                'format'=>'raw',
                'value'=>'$data->getDirection($data->dcontext)'
            ],
            [
                'attribute'=>'name',
                'label'=>'Name',
                'format'=>'raw',
                'value'=>'$data->getCallerName($data)'
            ],
            [
                'attribute'=>'callno',
                'label'=>'Calls',
                'format'=>'raw',
            ],
            [
                'attribute'=>'src',
                'label'=>'Number',
                'format'=>'raw',
                'value'=>'$data->getFromTo($data)'
            ],
            [
                'attribute'=>'channel',
                'label'=>'Line',
            ],
            [
                'attribute'=>'calldate',
                'label'=>'Time',
                'format'=>'raw',
                'value'=>'$data->getTime($data->calldate)'
            ],
            [
                'attribute'=>'billsec',
                'label'=>'Duration',
                'format'=>'raw',
                'value'=>'$data->getDuration($data->billsec)'
            ],
            [
                'attribute'=>'disposition',
                'label'=>'Status',
                'format'=>'raw',
                'value'=>'$data->getStatus($data->disposition, $data->billsec)'
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
