<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsModbus */

$this->title = Yii::t('app', 'Update Settings Modbus: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Modbus');
?>
<div class="settings-modbus-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
