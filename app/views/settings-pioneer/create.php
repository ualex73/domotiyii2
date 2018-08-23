<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsPioneer */

$this->title = Yii::t('app', 'Create Settings Pioneer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Pioneers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-pioneer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
