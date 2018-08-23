<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsXmlrpc */

$this->title = Yii::t('app', 'Create Settings Xmlrpc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Xmlrpcs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-xmlrpc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
