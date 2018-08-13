<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsViera */

$this->title = Yii::t('app', 'Update Settings Viera: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Viera');
?>
<div class="settings-viera-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
