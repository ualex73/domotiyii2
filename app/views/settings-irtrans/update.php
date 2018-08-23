<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsIrtrans */

$this->title = Yii::t('app', 'Update Settings Irtrans: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Irtrans', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-irtrans-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
