<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsDsc */

$this->title = Yii::t('app', 'Create Settings Dsc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Dscs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-dsc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
