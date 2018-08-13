<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsGenericio */

$this->title = Yii::t('app', 'Update Settings Genericio: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Genericio');
?>
<div class="settings-genericio-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
