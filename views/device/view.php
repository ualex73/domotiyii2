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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
