<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsAsterisk */

$this->title = Yii::t('app', 'Update Settings Asterisk: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Asterisk');
?>
<div class="settings-asterisk-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
