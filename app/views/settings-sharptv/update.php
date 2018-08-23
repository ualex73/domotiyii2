<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsSharptv */

$this->title = Yii::t('app', 'Update Settings Sharptv: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sharptv');
?>
<div class="settings-sharptv-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
