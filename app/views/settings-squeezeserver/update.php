<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsSqueezeserver */

$this->title = Yii::t('app', 'Update Settings Squeezeserver: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Squeezeserver');
?>
<div class="settings-squeezeserver-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
