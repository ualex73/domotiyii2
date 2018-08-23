<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsX10cmd */

$this->title = Yii::t('app', 'Create Settings X10cmd');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings X10cmds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-x10cmd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
