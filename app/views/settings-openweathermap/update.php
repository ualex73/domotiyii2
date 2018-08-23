<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOpenweathermap */

$this->title = Yii::t('app', 'Update Settings Openweathermap: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Openweathermap', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-openweathermap-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
