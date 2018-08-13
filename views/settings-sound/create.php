<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsSound */

$this->title = Yii::t('app', 'Create Settings Sound');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Sounds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-sound-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
