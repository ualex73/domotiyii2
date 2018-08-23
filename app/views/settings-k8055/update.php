<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsK8055 */

$this->title = Yii::t('app', 'Update Settings K8055: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'K8055');
?>
<div class="settings-k8055-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
