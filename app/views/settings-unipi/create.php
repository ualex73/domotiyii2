<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsUnipi */

$this->title = Yii::t('app', 'Create Settings Unipi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Unipis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-unipi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
