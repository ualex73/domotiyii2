<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Scenes */

$this->title = Yii::t('app', 'Create Scenes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Scenes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scenes-create">
    <jumbotron>
        <div>
            <a href="../scene/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../scene/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>
<hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
