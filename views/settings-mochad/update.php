<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsMochad */

$this->title = Yii::t('app', 'Update Settings Mochad: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Mochad');
?>
<div class="settings-mochad-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
