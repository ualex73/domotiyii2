<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsBluetooth */

$this->title = Yii::t('app', 'Create Settings Bluetooth');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Blueteeth'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-bluetooth-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
