<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsAstro */

$this->title = Yii::t('app', 'Create Settings Astro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Astros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-astro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
