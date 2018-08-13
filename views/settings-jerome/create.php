<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsJerome */

$this->title = Yii::t('app', 'Create Settings Jerome');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Jeromes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-jerome-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
