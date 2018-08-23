<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOwfs */

$this->title = Yii::t('app', 'Update Settings Owfs: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'OWFS', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-owfs-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
