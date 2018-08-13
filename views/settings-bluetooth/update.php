<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsBluetooth */

$this->title = Yii::t('app', 'Update Settings Bluetooth: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Bluetooth');
?>
<div class="settings-bluetooth-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
