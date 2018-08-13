<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsJeelabs */

$this->title = Yii::t('app', 'Update Settings Jeelabs: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Jeelabs');
?>
<div class="settings-jeelabs-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
