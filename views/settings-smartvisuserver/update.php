<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsSmartvisuserver */

$this->title = Yii::t('app', 'Update Settings Smartvisuserver: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Smartvisuserver');
?>
<div class="settings-smartvisuserver-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
