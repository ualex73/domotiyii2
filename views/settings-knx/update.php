<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsKnx */

$this->title = Yii::t('app', 'Update Settings Knx: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Knx');
?>
<div class="settings-knx-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
