<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsVisonic */

$this->title = Yii::t('app', 'Update Settings Visonic: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Visonic');
?>
<div class="settings-visonic-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
