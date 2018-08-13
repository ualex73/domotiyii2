<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsWeeder */

$this->title = Yii::t('app', 'Create Settings Weeder');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Weeders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-weeder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
