<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Graphs */

$this->title = Yii::t('app', 'Create Graphs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graphs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="graphs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
