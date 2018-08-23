<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsHomematic */

$this->title = Yii::t('app', 'Update Settings Homematic: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Homematic');
?>
<div class="settings-homematic-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
