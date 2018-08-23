<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPlugwise */

$this->title = Yii::t('app', 'Update Settings Plugwise: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Plugwise');
?>
<div class="settings-plugwise-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
