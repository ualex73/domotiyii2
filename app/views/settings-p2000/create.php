<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsP2000 */

$this->title = Yii::t('app', 'Create Settings P2000');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings P2000s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-p2000-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
