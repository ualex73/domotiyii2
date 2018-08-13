<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsServerstats */

$this->title = Yii::t('app', 'Update Settings Serverstats: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Serverstats');
?>
<div class="settings-serverstats-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
