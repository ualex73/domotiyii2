<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsXively */

$this->title = Yii::t('app', 'Create Settings Xively');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Xivelies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-xively-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
