<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsConrad8relay */

$this->title = Yii::t('app', 'Update Settings Conrad8relay: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Conrad8relay');
?>
<div class="settings-conrad8relay-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
