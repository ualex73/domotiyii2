<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsDigitemp */

$this->title = Yii::t('app', 'Update Settings Digitemp: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Digitemp');
?>
<div class="settings-digitemp-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
