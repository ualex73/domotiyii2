<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsTwitter */

$this->title = Yii::t('app', 'Create Settings Twitter');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Twitters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-twitter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
