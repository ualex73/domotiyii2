<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Devicevalues */

$this->title = Yii::t('app', 'Create Devicevalues');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devicevalues'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devicevalues-create">
    <jumbotron>
        <div>
            <a href="../devicevalue/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../devicevalue/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>
<hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
