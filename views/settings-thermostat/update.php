<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsThermostat */

$this->title = Yii::t('app', 'Update Settings Thermostat: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Thermostat');
?>
<div class="settings-thermostat-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
