<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Devicevalues */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devicevalues'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devicevalues-view">
    <jumbotron>
        <div>
            <a href="../devicevalue/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../devicevalue/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../devicevalue/view?id=<?=$model->id;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../devicevalue/update?id=<?=$model->id;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'device_id',
            'valuenum',
            'value:ntext',
            'correction:ntext',
            'units',
            'log',
            'logdisplay',
            'logspeak',
            'rrd',
            'graph',
            'valuerrddsname',
            'valuerrdtype',
            'lastchanged',
            'lastseen',
            'description',
            'type_id',
            'feedback',
            'control',
        ],
    ]) ?>

</div>
