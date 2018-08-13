<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsPvoutput */

$this->title = Yii::t('app', 'Create Settings Pvoutput');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Pvoutputs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-pvoutput-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
