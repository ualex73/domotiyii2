<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsThermostat */

$this->title = Yii::t('app', 'Create Settings Thermostat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Thermostats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-thermostat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
