<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsForecastio */

$this->title = Yii::t('app', 'Create Settings Forecastio');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Forecastios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-forecastio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
