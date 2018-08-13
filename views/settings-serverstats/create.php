<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsServerstats */

$this->title = Yii::t('app', 'Create Settings Serverstats');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Serverstats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-serverstats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
