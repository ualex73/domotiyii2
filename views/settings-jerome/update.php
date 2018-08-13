<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsJerome */

$this->title = Yii::t('app', 'Update Settings Jerome: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Jerome');
?>
<div class="settings-jerome-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
