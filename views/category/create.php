<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = Yii::t('app', 'Create Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">
    <jumbotron>
        <div>
            <a href="../category/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../category/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>
<hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
