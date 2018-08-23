<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsWirelesstags */

$this->title = Yii::t('app', 'Update Settings Wirelesstags: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Wirelesstags', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Wirelesstags');
?>
<div class="settings-wirelesstags-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
