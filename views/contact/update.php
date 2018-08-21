<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */

$this->title = Yii::t('app', 'Update Contacts: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="contacts-update">
    <jumbotron>
        <div>
            <a href="../contact/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../contact/create" class="btn btn-primary"><span class="fa fa-plus"></span> Create</a>
            <a href="../contact/view?id=<?= $model->id?>" class="btn btn-success"><span class="fa fa-info-circle"></span> View</a>
            <a href="../contact/update?id=<?= $model->id?>" class="btn btn-info"><span class="fa fa-pencil-alt"></span> Edit</a>
            <button type="submit" href="#" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</button>
        </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
