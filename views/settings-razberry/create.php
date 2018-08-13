<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsRazberry */

$this->title = Yii::t('app', 'Create Settings Razberry');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Razberries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-razberry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
