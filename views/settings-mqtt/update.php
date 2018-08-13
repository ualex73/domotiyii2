<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsMqtt */

$this->title = Yii::t('app', 'Update Settings Mqtt: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-mqtt-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
