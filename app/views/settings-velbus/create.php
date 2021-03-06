<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsVelbus */

$this->title = Yii::t('app', 'Create Settings Velbus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Velbuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-velbus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
