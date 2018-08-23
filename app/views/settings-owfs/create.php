<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsOwfs */

$this->title = Yii::t('app', 'Create Settings Owfs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Owfs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-owfs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
