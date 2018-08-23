<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Devices */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devices-view">

    <jumbotron>
        <div>
            <a href="../device/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../device/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../device/view?id=<?=$model->id;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../device/update?id=<?=$model->id;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </jumbotron>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'instance_id',
            'name',
            'address',
            'devicetype_id',
            'location_id',
            'onicon',
            'officon',
            'dimicon',
            'interface_id',
            'firstseen',
            'lastseen',
            'enabled',
            'hide',
            'groups',
            'batterystatus',
            'tampered',
            'comments:ntext',
            'switchable',
            'dimable',
            'extcode',
            'x',
            'y',
            'floorplan_id',
            'lastchanged',
            'repeatstate',
            'repeatperiod',
            'reset',
            'resetperiod',
            'resetvalue:ntext',
            'poll',
        ],
    ]) ?>

</div>
