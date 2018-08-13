<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsPwrctrl */

$this->title = Yii::t('app', 'Create Settings Pwrctrl');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Pwrctrls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-pwrctrl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
