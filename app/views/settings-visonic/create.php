<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsVisonic */

$this->title = Yii::t('app', 'Create Settings Visonic');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Visonics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-visonic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
