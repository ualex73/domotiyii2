<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-view">
    <jumbotron>
        <div>
            <a href="../contact/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../contact/create" class="btn btn-primary"><span class="fa fa-plus"></span> Create</a>
            <a href="../contact/view?id=<?= $model->id?>" class="btn btn-success"><span class="fa fa-info-circle"></span> View</a>
            <a href="../contact/update?id=<?= $model->id?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <button type="submit" href="#" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</button>
        </div>
    </jumbotron>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'address',
            'zipcode',
            'city',
            'country',
            'phoneno',
            'mobileno',
            'email:email',
            'cidphone',
            'cidmobile',
            'birthday',
            'holidaycard',
            'comments:ntext',
            'firstname',
            'surname',
            'callnr',
            'type',
            'firstseen',
            'lastseen',
        ],
    ]) ?>

</div>
