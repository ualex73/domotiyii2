<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsIviewer */

$this->title = Yii::t('app', 'Create Settings Iviewer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Iviewers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-iviewer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
