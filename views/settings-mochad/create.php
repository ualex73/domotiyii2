<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsMochad */

$this->title = Yii::t('app', 'Create Settings Mochad');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Mochads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-mochad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
