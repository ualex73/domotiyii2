<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsCtx35 */

$this->title = Yii::t('app', 'Create Settings Ctx35');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Ctx35s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-ctx35-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
