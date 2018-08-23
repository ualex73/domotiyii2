<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsForecastio */

$this->title = Yii::t('app', 'Update Settings Forecastio: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Forecastio');
?>
<div class="settings-forecastio-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
