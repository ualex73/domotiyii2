<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsVelbus */

$this->title = Yii::t('app', 'Update Settings Velbus: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Velbus');
?>
<div class="settings-velbus-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
