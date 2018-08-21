<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>DomotiGa</h1>

        <p class="lead">This is a new web client build from scratch using the Yii framework together with the Yiistrap extension to add the bootstrap look and feel.</p>

    </div>

    <p>
        <?php

        try {
            Yii::$app->db;
            $versionDB = \app\models\Version::findBySql('select id,db from version order by id DESC LIMIT 1')->one();
            $versionDBRequired = Yii::$app->params['versionDBRequired'];
            echo "<b>Database : </b> Version used : " . $versionDB['db'] . " - Version required (minimum) : " . $versionDBRequired;
            if ($versionDBRequired > $versionDB['db'])
                Yii::$app->session->setFlash('error', Yii::t('app', 'Database update is needed!'));
        } catch(Exception $e) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'Cannot connect to DomotiGa\'s database!'));
        }
        ?>
    </p>
    <p>
        <?php try {
        echo "<b>JSON-RPC</b> version: ";
        $res = doJsonRpc(array('jsonrpc' => '2.0', 'method' => 'api.version', 'id' => 1));
        if ($res) {
        if ($res->result) {
        echo $res->result;
        } else {
        echo '<span style="color:red;font-size:100%">Not available.</span>';
        }
        }

        } catch(Exception $e) {
        echo '<span style="color:red;font-size:100%">An error occured fetching JSON-RPC\'s version!</span>';
        }?>
    </p>
</div>
