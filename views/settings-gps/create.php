<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsGps */

$this->title = Yii::t('app', 'Create Settings Gps');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Gps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-gps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
