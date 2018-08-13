<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsIviewer */

$this->title = Yii::t('app', 'Update Settings Iviewer: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Iviewer', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-iviewer-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
