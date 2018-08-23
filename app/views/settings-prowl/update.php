<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsProwl */

$this->title = Yii::t('app', 'Update Settings Prowl: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Prowl');
?>
<div class="settings-prowl-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
