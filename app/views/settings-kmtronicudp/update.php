<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsKmtronicudp */

$this->title = Yii::t('app', 'Update Settings Kmtronicudp: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Kmtronicudp');
?>
<div class="settings-kmtronicudp-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
