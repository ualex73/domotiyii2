<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Events */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-view">
    <jumbotron>
        <div>
            <a href="../events/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../events/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../events/view?id=<?=$model->id;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../events/update?id=<?=$model->id;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
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
            'enabled',
            'name',
            'log',
            'firstrun',
            'lastrun',
            'comments:ntext',
            'trigger_id',
            'condition1_id',
            'operand',
            'condition2_id',
            'rerunenabled',
            'rerunvalue',
            'reruntype',
            'category_id',
        ],
    ]) ?>

</div>
