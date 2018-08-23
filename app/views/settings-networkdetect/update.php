<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsNetworkdetect */

$this->title = Yii::t('app', 'Update Settings Networkdetect: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Networkdetect');
?>
<div class="settings-networkdetect-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
