<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DeviceCameras */

$this->title = Yii::t('app', 'Create Device Cameras');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Device Cameras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-cameras-create">

    <jumbotron>
        <div>
            <a href="../cameras/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../cameras/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
