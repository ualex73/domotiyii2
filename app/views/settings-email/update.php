<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsEmail */

$this->title = Yii::t('app', 'Update Settings Email: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Email');
?>
<div class="settings-email-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
