<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Deviceblacklist */

$this->title = Yii::t('app', 'Update Deviceblacklist: ' . $model->blid, [
    'nameAttribute' => '' . $model->blid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deviceblacklists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->blid, 'url' => ['view', 'id' => $model->blid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="deviceblacklist-update">

    <jumbotron>
        <div>
            <a href="../deviceblacklist/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../deviceblacklist/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../deviceblacklist/view?id=<?=$model->id;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../deviceblacklist/update?id=<?=$model->id;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
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

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
