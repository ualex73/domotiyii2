<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = Yii::t('app', 'Update Category: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="category-update">
    <jumbotron>
            <div>
                <a href="../category/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
                <a href="../category/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
                <a href="../category/view?id=<?=$model->id;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
                <a href="../category/update?id=<?=$model->id;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
                <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
