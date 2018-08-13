<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsP2000 */

$this->title = Yii::t('app', 'Update Settings P2000: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'P2000');
?>
<div class="settings-p2000-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
