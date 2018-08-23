<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsWiringpi */

$this->title = Yii::t('app', 'Create Settings Wiringpi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Wiringpis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-wiringpi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
