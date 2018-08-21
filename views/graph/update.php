<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Graphs */

$this->title = Yii::t('app', 'Update Graphs: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graphs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="graphs-update">
    <jumbotron>
        <div>
            <a href="../graph/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../graph/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../graph/create" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../graph/create" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <a href="../graph/create" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</a>
        </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
