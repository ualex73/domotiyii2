<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Deviceblacklist */

$this->title = Yii::t('app', 'Update Deviceblacklist: ' . $model->blid, [
    'nameAttribute' => '' . $model->blid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deviceblacklists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->blid, 'url' => ['view', 'id' => $model->blid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="deviceblacklist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
