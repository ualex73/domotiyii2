<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsEzcontrol */

$this->title = Yii::t('app', 'Create Settings Ezcontrol');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Ezcontrols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-ezcontrol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
