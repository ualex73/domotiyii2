<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsIrman */

$this->title = Yii::t('app', 'Update Settings Irman: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Irman', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-irman-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
