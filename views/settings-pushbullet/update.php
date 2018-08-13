<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPushbullet */

$this->title = Yii::t('app', 'Update Settings Pushbullet: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Pushbullet');
?>
<div class="settings-pushbullet-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
