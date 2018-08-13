<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsCtx35 */

$this->title = Yii::t('app', 'Update Settings Ctx35: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Ctx35');
?>
<div class="settings-ctx35-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
