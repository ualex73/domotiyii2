<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOpentherm */

$this->title = Yii::t('app', 'Update Settings Opentherm: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Opentherm', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-opentherm-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
