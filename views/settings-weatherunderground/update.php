<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsWeatherunderground */

$this->title = Yii::t('app', 'Update Settings Weatherunderground: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Weatherunderground');
?>
<div class="settings-weatherunderground-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
