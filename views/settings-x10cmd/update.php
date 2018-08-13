<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsX10cmd */

$this->title = Yii::t('app', 'Update Settings X10cmd: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'X10cmd', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'X10cmd');
?>
<div class="settings-x10cmd-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
