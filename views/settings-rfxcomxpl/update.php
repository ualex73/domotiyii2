<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomxpl */

$this->title = Yii::t('app', 'Update Settings Rfxcomxpl: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Rfxcomxpl');
?>
<div class="settings-rfxcomxpl-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
