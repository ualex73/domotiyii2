<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsXpl */

$this->title = Yii::t('app', 'Update Settings Xpl: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'xpl', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Xpl');
?>
<div class="settings-xpl-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
