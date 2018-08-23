<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsTemp08 */

$this->title = Yii::t('app', 'Update Settings Temp08: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Temp08');
?>
<div class="settings-temp08-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
