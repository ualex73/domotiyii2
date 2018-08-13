<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsVoicetext */

$this->title = Yii::t('app', 'Create Settings Voicetext');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Voicetexts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-voicetext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
