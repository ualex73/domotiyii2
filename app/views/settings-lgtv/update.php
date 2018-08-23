<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsLgtv */

$this->title = Yii::t('app', 'Update Settings Lgtv: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Lgtv');
?>
<div class="settings-lgtv-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
