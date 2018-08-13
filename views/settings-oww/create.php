<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsOww */

$this->title = Yii::t('app', 'Create Settings Oww');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Owws'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-oww-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
