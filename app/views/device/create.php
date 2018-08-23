<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Devices */

$this->title = Yii::t('app', 'Create Devices');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devices-create">
    <jumbotron>
        <div>
            <a href="../device/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../device/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
