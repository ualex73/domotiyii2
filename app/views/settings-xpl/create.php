<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsXpl */

$this->title = Yii::t('app', 'Create Settings Xpl');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Xpls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-xpl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
