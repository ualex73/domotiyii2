<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsDenon */

$this->title = Yii::t('app', 'Update Settings Denon: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Denon');
?>
<div class="settings-denon-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
