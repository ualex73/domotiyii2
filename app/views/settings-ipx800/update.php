<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsIpx800 */

$this->title = Yii::t('app', 'Update Settings Ipx800: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => 'Ipx800', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-ipx800-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
