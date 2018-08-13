<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomtx */

$this->title = Yii::t('app', 'Update Settings Rfxcomtx: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Rfxcomtx');
?>
<div class="settings-rfxcomtx-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
