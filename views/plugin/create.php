<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Plugins */

$this->title = Yii::t('app', 'Create Plugins');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plugins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plugins-create">

    <jumbotron>
        <div>
            <a href="../plugin/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../plugin/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
    <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
