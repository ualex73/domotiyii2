<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsXmlrpc */

$this->title = Yii::t('app', 'Update Settings Xmlrpc: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' =>'XML-Rpc', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Xmlrpc');
?>
<div class="settings-xmlrpc-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
