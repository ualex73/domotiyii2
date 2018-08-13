<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsMysensors */

$this->title = Yii::t('app', 'Create Settings Mysensors');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Mysensors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-mysensors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
