<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsFritzbox */

$this->title = Yii::t('app', 'Update Settings Fritzbox: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Fritzbox');
?>
<div class="settings-fritzbox-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
