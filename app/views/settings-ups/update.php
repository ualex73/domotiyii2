<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsUps */

$this->title = Yii::t('app', 'Update Settings Ups: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Ups');
?>
<div class="settings-ups-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
