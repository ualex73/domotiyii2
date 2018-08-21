<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Devicetypes */

$this->title = Yii::t('app', 'Create Devicetypes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devicetypes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devicetypes-create">
    <jumbotron>
        <div>
            <a href="../devicetype/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../devicetype/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
