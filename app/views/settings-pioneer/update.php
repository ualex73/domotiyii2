<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPioneer */

$this->title = Yii::t('app', 'Update Settings Pioneer: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Pioneer');
?>
<div class="settings-pioneer-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
