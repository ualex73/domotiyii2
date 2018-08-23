<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOnkyo */

$this->title = Yii::t('app', 'Update Settings Onkyo: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Onkyo');
?>
<div class="settings-onkyo-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
