<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsLedmatrix */

$this->title = Yii::t('app', 'Update Settings Ledmatrix: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Ledmatrix');
?>
<div class="settings-ledmatrix-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
