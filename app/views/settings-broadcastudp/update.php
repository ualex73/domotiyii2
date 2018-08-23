<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsBroadcastudp */

$this->title = Yii::t('app', 'Update Settings Broadcastudp: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Broadcastudp');
?>
<div class="settings-broadcastudp-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
