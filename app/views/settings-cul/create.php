<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsCul */

$this->title = Yii::t('app', 'Create Settings Cul');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Culs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-cul-create">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>-->
    <legend>CUL - CC1101 USB Lite</legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
