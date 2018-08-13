<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsSms */

$this->title = Yii::t('app', 'Update Settings Sms: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sms'), 'url' => ['settings/index-plugin']];
?>
<div class="settings-sms-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
