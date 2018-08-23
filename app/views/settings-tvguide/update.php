<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsTvguide */

$this->title = Yii::t('app', 'Update Settings Tvguide: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Tvguide');
?>
<div class="settings-tvguide-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
