<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Devicevalueslog */

$this->title = Yii::t('app', 'Create DeviceValueLog');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devicevalueslogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devicevalueslog-create">
    <jumbotron>
        <div>
            <a href="../devicevaluelog/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../devicevaluelog/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
