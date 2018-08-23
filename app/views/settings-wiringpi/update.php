<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsWiringpi */

$this->title = Yii::t('app', 'Update Settings Wiringpi: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Wiringpi', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Wiringpi');
?>
<div class="settings-wiringpi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
