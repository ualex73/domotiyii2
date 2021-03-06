<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Actions */

$this->title = Yii::t('app', 'Create Actions');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Actions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actions-create">
    <jumbotron>
        <div>
            <a href="../actions/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../actions/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
