<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Graphs */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graphs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="graphs-view">
    <jumbotron>
        <div>
            <a href="../graph/index" class="btn btn-success"><span class="fa fa-list-alt"></span> List</a>
            <a href="../graph/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../graph/create" class="btn btn-success"><span class="fa fa-plus"></span> View</a>
            <a href="../graph/create" class="btn btn-success"><span class="fa fa-plus"></span> Edit</a>
            <a href="../graph/create" class="btn btn-success"><span class="fa fa-plus"></span> Delete</a>
        </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

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
            'name',
            'enabled',
            'comments',
            'graph_title',
            'graph_height',
            'graph_width',
            'color_background',
            'color_canvas',
            'color_shadea',
            'color_shadeb',
            'color_font',
            'color_grid',
            'color_majorgrid',
            'color_frame',
            'color_axis',
            'color_arrow',
            'unit',
            'logarithmic_scale',
            'date',
            'grid_type',
            'groups',
        ],
    ]) ?>

</div>
