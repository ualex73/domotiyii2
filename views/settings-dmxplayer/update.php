<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsDmxplayer */

$this->title = Yii::t('app', 'Update Settings Dmxplayer: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Dmxplayer');
?>
<div class="settings-dmxplayer-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
