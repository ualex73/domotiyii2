<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsCul */

$this->title = Yii::t('app', 'Update Settings Cul: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Cul');
?>
<div class="settings-cul-update">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>-->
    <legend>CUL - CC1101 USB Lite</legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
