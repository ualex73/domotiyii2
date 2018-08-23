<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsTelnetserver */

$this->title = Yii::t('app', 'Create Settings Telnetserver');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Telnetservers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-telnetserver-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
