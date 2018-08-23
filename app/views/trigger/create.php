<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Triggers */

$this->title = Yii::t('app', 'Create Triggers');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Triggers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="triggers-create">
    <jumbotron>
        <div>
            <a href="../trigger/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../trigger/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
