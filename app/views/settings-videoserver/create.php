<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsVideoserver */

$this->title = Yii::t('app', 'Create Settings Videoserver');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Videoservers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-videoserver-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
