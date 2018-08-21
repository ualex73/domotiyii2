<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contacts */

$this->title = Yii::t('app', 'Create Contact');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-create">
    <jumbotron>
        <div>
            <a href="../contact/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../contact/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <div class="search-form" style="display: none">
        <?php
        $model= new \app\models\Contacts();
        echo $this->render('_search',['model'=>$model]
        ); ?>
    </div>
    <h3><?= Html::encode($this->title) ?></h3>
<hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
