<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsMysensors */

$this->title = Yii::t('app', 'Update Settings Mysensors: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Mysensors');
?>
<div class="settings-mysensors-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
