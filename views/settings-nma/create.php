<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsNma */

$this->title = Yii::t('app', 'Create Settings Nma');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Nmas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-nma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
