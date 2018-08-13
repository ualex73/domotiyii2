<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsConrad8relay */

$this->title = Yii::t('app', 'Create Settings Conrad8relay');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Conrad8relays'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-conrad8relay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
