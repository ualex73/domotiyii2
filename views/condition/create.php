<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Conditions */

$this->title = Yii::t('app', 'Create Conditions');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Conditions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conditions-create">
    <jumbotron>
        <div>
            <a href="../condition/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../condition/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
