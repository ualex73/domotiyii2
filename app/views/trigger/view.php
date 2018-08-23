<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Triggers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Triggers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="triggers-view">
    <jumbotron>
        <div>
            <a href="../trigger/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../trigger/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../trigger/view?id=<?=$model->id;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../trigger/update?id=<?=$model->id;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
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
            'name',
            'type',
            'description:ntext',
            'param1:ntext',
            'param2:ntext',
            'param3:ntext',
            'param4:ntext',
            'param5:ntext',
        ],
    ]) ?>

</div>
