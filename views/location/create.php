<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Locations */

$this->title = Yii::t('app', 'Create Locations');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locations-create">

    <jumbotron>
        <div>
            <a href="../location/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../location/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
