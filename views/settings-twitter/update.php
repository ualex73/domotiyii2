<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsTwitter */

$this->title = Yii::t('app', 'Update Settings Twitter: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Twitter');
?>
<div class="settings-twitter-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
