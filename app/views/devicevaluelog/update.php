<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Devicevalueslog */

$this->title = Yii::t('app', 'Update Devicevalueslog: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devicevalueslogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="devicevalueslog-update">
    <jumbotron>
        <div>
            <a href="../devicevaluelog/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../devicevaluelog/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../devicevaluelog/view?id=<?=$model->id;?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../devicevaluelog/update?id=<?=$model->id;?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
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
