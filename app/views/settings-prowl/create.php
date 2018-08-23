<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsProwl */

$this->title = Yii::t('app', 'Create Settings Prowl');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Prowls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-prowl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
