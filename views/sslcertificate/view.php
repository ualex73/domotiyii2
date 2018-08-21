<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sslcertificates */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sslcertificates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sslcertificates-view">
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



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'certificate',
            'private',
            'client',
            'description:ntext',
        ],
    ]) ?>

</div>
