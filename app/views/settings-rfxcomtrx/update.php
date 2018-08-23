<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomtrx */

$this->title = Yii::t('app', 'Update Settings Rfxcomtrx: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Rfxcomtrx');
?>
<div class="settings-rfxcomtrx-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
