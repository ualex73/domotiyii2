<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Globalvars */

$this->title = $model->var;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Globalvars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="globalvars-view">
    <jumbotron>
        <div>
            <a href="../globalvars/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../globalvars/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../globalvars/view?id=<?=$model->id;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../globalvars/update?id=<?=$model->id;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $model= new \app\models\Globalvars();
        echo $this->render('_search',['model'=>$model]
        ); ?>
    </div>
    <h3><?= Html::encode($this->title) ?></h3>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'var',
            'value:ntext',
            'datatype',
        ],
    ]) ?>

</div>
