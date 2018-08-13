<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsVoicetext */

$this->title = Yii::t('app', 'Update Settings Voicetext: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Voicetext');
?>
<div class="settings-voicetext-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
