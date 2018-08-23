<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomrx */

$this->title = Yii::t('app', 'Update Settings Rfxcomrx: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Rfxcomrx');
?>
<div class="settings-rfxcomrx-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
