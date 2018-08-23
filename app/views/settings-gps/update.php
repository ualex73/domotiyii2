<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsGps */

$this->title = Yii::t('app', 'Update Settings Gps: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Gps');
?>
<div class="settings-gps-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
