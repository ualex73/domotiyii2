<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsNcid */

$this->title = Yii::t('app', 'Update Settings Ncid: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Ncid');
?>
<div class="settings-ncid-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
