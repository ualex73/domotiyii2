<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsToon */

$this->title = Yii::t('app', 'Update Settings Toon: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Toon');
?>
<div class="settings-toon-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
