<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsAstro */

$this->title = Yii::t('app', 'Update Settings Astro: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Astro');
?>
<div class="settings-astro-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
