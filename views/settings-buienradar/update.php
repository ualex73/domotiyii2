<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsBuienradar */

$this->title = Yii::t('app', 'Update Settings Buienradar: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Buienradar');
?>
<div class="settings-buienradar-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
