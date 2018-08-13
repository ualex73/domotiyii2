<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsOmniksol */

$this->title = Yii::t('app', 'Create Settings Omniksol');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Omniksols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-omniksol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
