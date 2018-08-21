<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = Yii::t('app', 'Update Users: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="users-update">
    <jumbotron>
        <div>
            <a href="../user/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../user/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../user/view?id=<?=$model->id?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../user/update?id=<?=$model->id?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <a href="#" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</a>
        </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
