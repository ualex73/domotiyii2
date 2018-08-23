<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsNma */

$this->title = Yii::t('app', 'Update Settings Nma: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Nma');
?>
<div class="settings-nma-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
