<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsShell */

$this->title = Yii::t('app', 'Update Settings Shell: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Shell');
?>
<div class="settings-shell-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
