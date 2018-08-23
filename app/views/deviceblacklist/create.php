<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Deviceblacklist */

$this->title = Yii::t('app', 'Create Deviceblacklist');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deviceblacklists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deviceblacklist-create">

    <jumbotron>
        <div>
            <a href="../deviceblacklist/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../deviceblacklist/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
