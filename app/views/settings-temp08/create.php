<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsTemp08 */

$this->title = Yii::t('app', 'Create Settings Temp08');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Temp08s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-temp08-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
