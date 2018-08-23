<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOmniksol */

$this->title = Yii::t('app', 'Update Settings Omniksol: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Omniksol');
?>
<div class="settings-omniksol-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
