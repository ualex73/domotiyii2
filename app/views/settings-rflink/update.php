<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsRflink */

$this->title = Yii::t('app', 'Update Settings Rflink: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Rflink');
?>
<div class="settings-rflink-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
