<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsEzcontrol */

$this->title = Yii::t('app', 'Update Settings Ezcontrol: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Ezcontrol');
?>
<div class="settings-ezcontrol-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
