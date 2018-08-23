<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsFritzbox */

$this->title = Yii::t('app', 'Create Settings Fritzbox');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Fritzboxes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-fritzbox-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
