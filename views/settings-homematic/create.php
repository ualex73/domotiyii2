<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsHomematic */

$this->title = Yii::t('app', 'Create Settings Homematic');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Homematics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-homematic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
