<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Globalvars */

$this->title = Yii::t('app', 'Create Globalvars');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Globalvars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="globalvars-create">
    <jumbotron>
        <div>
            <a href="../globalvars/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../globalvars/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $model= new \app\models\Globalvars();
        echo $this->render('_search',['model'=>$model]
        ); ?>
    </div>
    <h3><?= Html::encode($this->title) ?></h3>
<hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
