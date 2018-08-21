<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sslcertificates */

$this->title = Yii::t('app', 'Update Sslcertificates: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sslcertificates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sslcertificates-update">
    <jumbotron>
        <div>
            <a href="../sslcertificate/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../sslcertificate/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
            <a href="../sslcertificate/view?id=<?=$model->id?>" class="btn btn-primary"><span class="fa fa-info-circle"></span> View</a>
            <a href="../sslcertificate/update?id=<?=$model->id?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <a href="#" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</a>
        </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
