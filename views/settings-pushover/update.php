<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPushover */

$this->title = Yii::t('app', 'Update Settings Pushover: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Pushover');
?>
<div class="settings-pushover-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
