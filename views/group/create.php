<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Groups */

$this->title = Yii::t('app', 'Create Groups');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-create">
    <jumbotron>
        <div>
            <a href="../group/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../group/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
