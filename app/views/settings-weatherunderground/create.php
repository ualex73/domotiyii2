<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsWeatherunderground */

$this->title = Yii::t('app', 'Create Settings Weatherunderground');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Weatherundergrounds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-weatherunderground-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
