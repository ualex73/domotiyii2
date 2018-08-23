<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsJsonrpc */

$this->title = Yii::t('app', 'Update Settings Jsonrpc: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Jsonrpc');
?>
<div class="settings-jsonrpc-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
