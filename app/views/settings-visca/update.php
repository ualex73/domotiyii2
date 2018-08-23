<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsVisca */

$this->title = Yii::t('app', 'Update Settings Visca: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Visca');
?>
<div class="settings-visca-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
