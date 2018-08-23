<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsCallerid */

$this->title = Yii::t('app', 'Create Settings Callerid');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Callerids'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-callerid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
