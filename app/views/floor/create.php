<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Floors */

$this->title = Yii::t('app', 'Create Floors');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Floors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="floors-create">

    <jumbotron>
        <div>
            <a href="../floor/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../floor/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
