<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPhilipshue */

$this->title = Yii::t('app', 'Update Settings Philipshue: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' =>'Philipshue', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-philipshue-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
