<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsLirc */

$this->title = Yii::t('app', 'Update Settings Lirc: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Lirc', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Lirc');
?>
<div class="settings-lirc-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
