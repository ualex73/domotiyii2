<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPwrctrl */

$this->title = Yii::t('app', 'Update Settings Pwrctrl: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Pwrctrl');
?>
<div class="settings-pwrctrl-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
