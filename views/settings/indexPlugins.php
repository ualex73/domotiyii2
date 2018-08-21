<?php
$this->title = Yii::t('app', 'All');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="tab " role="tabpanel">
    <ul class="nav nav-tabs session-tab-ul" role="tablist">
        <?php  $currentPath=Yii::$app->request->getUrl();?>
        <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/settings/index-plugin') {
            echo 'active';
        }
        ?>"><a href='../settings/index-plugin'>
                All</a></li>
        <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/settings/index-plugin?filter=Enabled') {
            echo 'active';
        }?>"><a href='../settings/index-plugin?filter=Enabled'>
                Enabled</a></li>
        <li class="session-tab-li <?php if ($currentPath == Yii::$app->request->baseUrl.'/settings/index-plugin?filter=Disabled') {
            echo 'active';
        }?>"><a href='../settings/index-plugin?filter=Disabled'>
                Disabled</a></li>
    </ul>
</div>
<h2>Gridview</h2>
<?php echo  \yii\grid\GridView::widget([
    'dataProvider' => $data,
//    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'name',
        'status',
        'information:html',


        ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}',//{download}
            'buttons' => [
                'update' => function ($url, $model, $key) {
                    $viewFolder = "settings-" . strtolower($model['name']);

                    return \yii\helpers\Html::a('', [$viewFolder . '/update'], ['class' => 'glyphicon glyphicon-pencil', 'title' => 'update', 'style' => 'margin-right:10px']);
                },
            ],
        ],
    ],
]); ?>
<script>
    $(document).ready(function(){
        $('li').on('click', function(){
            //alert('clicked');
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<style>
    .tab .nav-tabs {
        padding-left: 15px;
        border-bottom: 4px solid #333;
    }

    .tab .nav-tabs li a {
        color: #fff;
        padding: 10px 15px;
        margin-right: 10px;
        background: #333;
        text-shadow: 1px 1px 2px #000;
        border: none;
        border-radius: 0;
        opacity: 0.5;
        position: relative;
        transition: all 0.3s ease 0s;
    }

    .tab .nav-tabs li a:hover {
        background: #333;
        opacity: 0.8;
    }

    .tab .nav-tabs li.active a {
        opacity: 1;
    }

    .tab .nav-tabs li.active a,
    .tab .nav-tabs li.active a:hover,
    .tab .nav-tabs li.active a:focus {
        color: #fff;
        background: #333;
        border: none;
        border-radius: 0;
    }

    .tab .nav-tabs li a:before,
    .tab .nav-tabs li a:after {
        content: "";
        border-top: 42px solid transparent;
        position: absolute;
        top: -2px;
    }

    .tab .nav-tabs li a:before {
        border-right: 15px solid #333;
        left: -15px;
    }

    .tab .nav-tabs li a:after {
        border-left: 15px solid #333;
        right: -15px;
    }

    .tab .nav-tabs li a i,
    .tab .nav-tabs li.active a i {
        display: inline-block;
        padding-right: 5px;
        font-size: 15px;
        text-shadow: none;
    }

    .tab .nav-tabs li a span {
        display: inline-block;
        font-size: 14px;
        letter-spacing: -9px;
        opacity: 0;
        transition: all 0.3s ease 0s;
    }

    .tab .nav-tabs li a:hover span,
    .tab .nav-tabs li.active a span {
        letter-spacing: 1px;
        opacity: 1;
        transition: all 0.3s ease 0s;
    }
</style>