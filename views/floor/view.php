<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Floors */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Floors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="floors-view">
    <jumbotron>
        <div>
            <a href="../floor/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../floor/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../floor/view?id=<?=$model->floor;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../floor/update?id=<?=$model->floor;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->floor], [
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
            'floor',
            'name',
            'image',
        ],
    ]) ?>

</div>
