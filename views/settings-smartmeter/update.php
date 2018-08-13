<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsSmartmeter */

$this->title = Yii::t('app', 'Update Settings Smartmeter: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Smartmeter');
?>
<div class="settings-smartmeter-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
