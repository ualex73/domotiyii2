<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsRazberry */

$this->title = Yii::t('app', 'Update Settings Razberry: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Razberry', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-razberry-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
