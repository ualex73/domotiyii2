<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsUnipi */

$this->title = Yii::t('app', 'Update Settings Unipi: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Unipi');
?>
<div class="settings-unipi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
