<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Plugins */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plugins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plugins-view">

    <legend><?= Html::encode($this->title) ?></legend>

    <jumbotron>
        <div style="margin-bottom: 5px">
            <a href="../plugin/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../plugin/view?id=<?=$model->id?>" class="btn btn-success"><span class="fa fa-info-circle"></span> View</a>
        </div>
    </jumbotron>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'interface',
            'protocols',
            'name',
            'type',
        ],
    ]) ?>

</div>
