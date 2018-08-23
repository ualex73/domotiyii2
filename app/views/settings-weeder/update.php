<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsWeeder */

$this->title = Yii::t('app', 'Update Settings Weeder: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Weeder');
?>
<div class="settings-weeder-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
