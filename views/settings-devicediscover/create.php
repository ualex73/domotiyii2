<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsDevicediscover */

$this->title = Yii::t('app', 'Create Settings Devicediscover');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Devicediscovers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-devicediscover-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
