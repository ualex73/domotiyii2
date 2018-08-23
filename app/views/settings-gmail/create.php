<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsGmail */

$this->title = Yii::t('app', 'Create Settings Gmail');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Gmails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-gmail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
