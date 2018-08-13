<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPvoutput */

$this->title = Yii::t('app', 'Update Settings Pvoutput: ' . $model->id, [
    'nameAttribute' => 'PVOutput' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Pvoutput');
?>
<div class="settings-pvoutput-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
