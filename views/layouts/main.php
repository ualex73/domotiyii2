<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl;?>/css/solid.css"
          integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl;?>/css/fontawesome.css"
          integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-right'],
        'items' => [
            ['label' => Yii::t('app', 'Modules'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                'items' => [
                    ['label' => 'Overview', 'url' => ['/settings/index-module']],
                    ['label' => 'Main', 'url' => ['/settings-main/update']],
                    ['label' => 'Astro And Location', 'url' => ['/settings-astro/update']],
                    ['label' => 'CallerId', 'url' => ['/settings-callerid/update']],
                    ['label' => Yii::t('app', 'Email'), 'url' => '#','options'=>['dropdown-submenu'],'template'=>'dropdown-menu',
                        'items' => [
                            ['label' => 'Email SMTP', 'url' => ['/settings-email/update']],
                            ['label' => 'Gmail Notifier', 'url' => ['/settings-gmail/update']],
                        ],
                    ],
                    ['label' => 'Device Discover', 'url' => ['/settings-devicediscover/update']],
                    ['label' => 'Twitter', 'url' => ['/settings-twitter/update']],
                    ['label' => 'P2000 Scanner', 'url' => ['/settings-p2000/update']],
                    ['label' => Yii::t('app', 'Servers'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                        'items' => [
                            ['label' => 'Broadcast Udp', 'url' => ['/settings-broadcastudp/update']],
                            ['label' => 'JSON-RPC server', 'url' => ['/settings-jsonrpc/update']],
                            ['label' => 'Smart VISU Server', 'url' => ['/settings-smartvisuserver/update']],
                            ['label' => 'TELNET Server', 'url' => ['/settings-telnetserver/update']],
                            ['label' => 'XML-RPC', 'url' => ['/settings-xmlrpc/update']],
                        ]
                    ],
                    ['label' => 'Sound', 'url' => ['/settings-sound/update']],
                    ['label' => 'Voice Text', 'url' => ['/settings-voicetext/update']],
                    ['label' => Yii::t('app', 'Weather'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                        'items' => [
                            ['label' => 'Buienradar', 'url' => ['/settings-buienradar/update']],
                            ['label' => 'OpenWeatherMap', 'url' => ['/settings-openweathermap/update']],
                            ['label' => 'Forecast.io', 'url' => ['/settings-forecastio/update']],
                            ['label' => 'WeatherUnderground', 'url' => ['/settings-weatherunderground/update']],
                            ['label' => 'Meteohub', 'url' => ['/settings-meteohub/update']],
                        ]
                    ],
                    ['label' => Yii::t('app', 'Notifiers'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                        'items' => [
                            ['label' => 'Prowl', 'url' => ['/settings-prowl/update']],
                            ['label' => 'Pushover', 'url' => ['/settings-pushover/update']],
                            ['label' => 'Pushbullet', 'url' => ['/settings-pushbullet/update']],
                            ['label' => 'NMA', 'url' => ['/settings-nma/update']],
                        ]
                    ],
                    ['label' => 'Server Stats', 'url' => ['/settings-serverstats/update']],
                    ['label' => Yii::t('app', 'TV Guide'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                        'items' => [
                            ['label' => 'Settings', 'url' => ['/settings-tvguide/update']],
                            ['label' => 'Channels', 'url' => ['/settings-tvchannels/update']],
                            ['label' => 'Categories', 'url' => ['/settings-tvcategories/update']],
                        ]
                    ],
                    ['label' => Yii::t('app', 'Publish Data'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                        'items' => [
                            ['label' => 'Bwired Map', 'url' => ['/settings-bwiredmap/update']],
                            ['label' => 'MQTT', 'url' => ['/settings-mqtt/update']],
                            ['label' => 'PVoutput', 'url' => ['/settings-pvoutput/update']],
                            ['label' => 'TemperaturNu', 'url' => ['/settings-temperaturnu/update']],
                            ['label' => 'Xively', 'url' => ['/settings-xively/update']],
                        ]
                    ],
                    ['label' => Yii::t('app', 'Thermostats'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                        'items' => [
                            ['label' => 'Built-in Thermostat', 'url' => ['/settings-thermostat/update']],
                            ['label' => 'Toon Thermostat', 'url' => ['/settings-toon/update']],
                        ]
                    ],
                ]
            ],
                ['label' => Yii::t('app', 'Interfaces'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                    'items' => [
                        ['label' => 'Overview', 'url' => ['settings/index-plugin']],
                        ['label' => '1-Wire', 'url' => '#', 'items' => [
                            ['label' => 'Digitemp', 'url' => ['settings-digitemp/update']],
                            ['label' => 'Midon TEMP08', 'url' => ['settings-temp08/update']],
                            ['label' => 'OWFS', 'url' => ['settings-owfs/update']],
                            ['label' => 'OWW', 'url' => ['settings-oww/update']],
                        ]],
                        ['label' => 'Arduino', 'url' => '#', 'items' => [
                            ['label' => 'GenericIO', 'url' => ['settings-genericio/update']],
                            ['label' => 'Jeelabs', 'url' => ['settings-jeelabs/update']],
                        ]],
                        ['label' => 'Audio Video', 'url' => '#', 'items' => [
                            ['label' => 'Denon AV', 'url' => ['settings-denon/update']],
                            ['label' => 'iPort Dock', 'url' => ['settings-iport/update']],
                            ['label' => 'LG TV', 'url' => ['settings-lgtv/update']],
                            ['label' => 'Onkyo/Integra AV', 'url' => ['settings-onkyo/update']],
                            ['label' => 'Panasonic Viera', 'url' => ['settings-viera/update']],
                            ['label' => 'Pioneer AV', 'url' => ['settings-pioneer/update']],
                            ['label' => 'Sharp TV', 'url' => ['settings-sharptv/update']],
                            ['label' => 'Squeeze Server', 'url' => ['settings-squeezeserver/update']],
                        ]],
                        ['label' => 'CallerID', 'url' => '#', 'items' => [
                            ['label' => 'Asterisk', 'url' => ['settings-asterisk/update']],
                            ['label' => 'Fritz!Box', 'url' => ['settings-fritzbox/update']],
                            ['label' => 'Ncid', 'url' => ['settings-ncid/update']],
                        ]],
                        ['label' => 'Cameras', 'url' => '#', 'items' => [
                            ['label' => 'Cameras', 'url' => ['cameras/index']],
                            ['label' => 'IP Videoserver', 'url' => ['settings-videoserver/update']],
                            ['label' => 'Sony Visca', 'url' => ['settings-visca/update']],
                        ]],
                        ['label' => 'CUL', 'url' => ['/settings-cul/update']],
                        ['label' => 'Device Control', 'url' => '#', 'items' => [
                            ['label' => 'Anel PwrCtrl', 'url' => ['settings-pwrctrl/update']],
                            ['label' => 'DMX Player', 'url' => ['settings-dmxplayer/update']],
                            ['label' => 'EZcontrol', 'url' => ['settings-ezcontrol/update']],
                            ['label' => 'HomeMatic', 'url' => ['settings-homematic/update']],
                            ['label' => 'Jerome I/O', 'url' => ['settings-jerome/update']],
                            ['label' => 'IPX800', 'url' => ['settings-ipx800/update']],
                            ['label' => 'KNX', 'url' => ['settings-knx/update']],
                            ['label' => 'Philips Hue', 'url' => ['settings-philipshue/update']],
                            ['label' => 'PLCBUS', 'url' => ['settings-plcbus/update']],
                            ['label' => 'Velbus', 'url' => ['settings-velbus/update']],
                            ['label' => 'X10', 'url' => '#', 'items' => [
                                ['label' => 'Mochad', 'url' => ['settings-mochad/update']],
                                ['label' => 'X10Cmd', 'url' => ['settings-x10cmd/update']],
                                ['label' => 'Xanura CTX35', 'url' => ['settings-ctx35/update']],
                            ]],
                            ['label' => 'Z-Wave', 'url' => '#', 'items' => [
                                ['label' => 'OpenZWave', 'url' => ['settings-openzwave/update']],
                                ['label' => 'RaZberry', 'url' => ['settings-razberry/update']],
                            ]],
                        ]],
                        ['label' => 'Energy Measurement', 'url' => '#', 'items' => [
                            ['label' => 'Current Cost', 'url' => ['settings-currentcost/update']],
                            ['label' => 'Plugwise', 'url' => ['settings-plugwise/update']],
                            ['label' => 'SmartMeter', 'url' => ['settings-smartmeter/update']],
                        ]],
                        ['label' => 'HDDTemp', 'url' => ['settings-hddtemp/update']],
                        ['label' => 'Input/Output', 'url' => '#', 'items' => [
                            ['label' => 'Conrad 8-Relay', 'url' => ['settings-conrad8relay/update']],
                            ['label' => 'KMTronic UDP', 'url' => ['settings-kmtronicudp/update']],
                            ['label' => 'UniPi', 'url' => ['settings-unipi/update']],
                            ['label' => 'Velleman K8055', 'url' => ['settings-k8055/update']],
                            ['label' => 'Weeder I/O', 'url' => ['settings-weeder/update']],
                            ['label' => 'WiringPi', 'url' => ['settings-wiringpi/update']],
                        ]],
                        ['label' => 'Remote Control', 'url' => '#', 'items' => [
                            ['label' => 'CF iViewer', 'url' => ['settings-iviewer/update']],
                            ['label' => 'UIR/IRMan', 'url' => ['settings-irman/update']],
                            ['label' => 'IRTrans', 'url' => ['settings-irtrans/update']],
                            ['label' => 'LIRC', 'url' => ['settings-lirc/update']],
                        ]],
                        ['label' => 'LED Matrix', 'url' => ['settings-ledmatrix/update']],
                        ['label' => 'Mobile', 'url' => '#', 'items' => [
                            ['label' => 'Bluetooth', 'url' => ['settings-bluetooth/update']],
                            ['label' => 'SMS Modem', 'url' => ['settings-sms/update']],
                        ]],
                        ['label' => 'Network Detect', 'url' => ['settings-networkdetect/update']],
                        ['label' => 'NMEA GPS', 'url' => ['settings-gps/update']],
                        ['label' => 'Modbus', 'url' => ['settings-modbus/update']],
                        ['label' => 'MySensors', 'url' => ['settings-mysensors/update']],
                        ['label' => 'Omniksol', 'url' => ['settings-omniksol/update']],
                        ['label' => 'OpenTherm', 'url' => ['settings-opentherm/update']],
                        ['label' => 'RFLink', 'url' => ['settings-rflink/update']],
                        ['label' => 'RRDTool', 'url' => ['settings-rrdtool/update']],
                        ['label' => 'RFXCom', 'url' => '#', 'items' => [
                            ['label' => 'RFXCom Receiver', 'url' => ['settings-rfxcomrx/update']],
                            ['label' => 'RFXCom Transmitter', 'url' => ['settings-rfxcomtx/update']],
                            ['label' => 'RFXCom Transceiver', 'url' => ['settings-rfxcomtrx/update']],
                            ['label' => 'RFXCom xPL', 'url' => ['settings-rfxcomxpl/update']],
                        ]],
                        ['label' => 'Security', 'url' => '#', 'items' => [
                            ['label' => 'DSC Security', 'url' => ['settings-dsc/update']],
                            ['label' => 'Visonic', 'url' => ['settings-visonic/update']],
                        ]],
                        ['label' => 'Shell', 'url' => ['settings-shell/update']],
                        ['label' => 'UPS Monitor', 'url' => ['settings-ups/update']],
                        ['label' => 'Wireless Tags', 'url' => ['/settings-wirelesstag/update']],
                        ['label' => 'xPl', 'url' => ['/settings-xpl/update']],
                    ]
                ],

                ['label' => Yii::t('app', 'Devices'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#', 'items' => [
                    ['label' => 'List Devices', 'url' => ['device/index']],
                    ['label' => 'DeviceTypes', 'url' => ['devicetype/index']],
                    ['label' => 'Groups', 'url' => ['group/index']],
                    ['label' => 'Locations', 'url' => ['location/index']],
                    ['label' => 'Floors', 'url' => ['floor/index']],
                    ['label' => 'Blacklist', 'url' => ['deviceblacklist/index']],
                    ['label' => 'Plugins', 'url' => ['plugin/index']],
                    ['label' => 'Values', 'url' => ['devicevalue/index']],
                    ['label' => 'ValuesLog', 'url' => ['devicevaluelog/index']],
                ]],
                ['label' => Yii::t('app', 'Edit'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                    'items' => [
                        ['label' => 'Contacts', 'url' => ['/contact/index']],
                        ['label' => 'GlobalVars', 'url' => ['/globalvars/index']],
                        ['label' => 'Graphs', 'url' => ['/graph/index']],
                        ['label' => 'SSL Certificates', 'url' => ['/sslcertificate/index']],
                        ['label' => 'Users', 'url' => ['/user/index']],
                    ]
                ],
                ['label' => Yii::t('app', 'Events'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                    'items' => [
                        ['label' => 'Events', 'url' => ['/events/index']],
                        ['label' => 'Scenes', 'url' => ['/scene/index']],
                        ['label' => 'Triggers', 'url' => ['/trigger/index']],
                        ['label' => 'Conditions', 'url' => ['/condition/index']],
                        ['label' => 'Actions', 'url' => ['/actions/index']],
                        ['label' => 'Categories', 'url' => ['/category/index']],
                    ]
                ],
                ['label' => Yii::t('app', 'Tools'), 'visible' => !Yii::$app->user->isGuest, 'url' => '#',
                    'items' => [
                        ['label' => 'Open Zwave Commander', 'url' => ['/openzwavecommander/index']],
                    ]
                ],

                ['label' => 'Gii', 'url' => ['/gii']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                ),
            ],
        ]);
    NavBar::end();
    ?>

    <div class="">
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="col-md-2">
            <?php
            echo Nav::widget([
                'options' => ['class' => 'sidebar'],
                'items' => [
                    ['label' => Yii::t('app', 'Devices'), 'url' =>Yii::$app->user->isGuest ?['site/login']:['/device/index'],],
                    ['label' => Yii::t('app', 'Control Table'),'url' => Yii::$app->user->isGuest ?['site/login']:['/control/table'],],
                    ['label' => Yii::t('app', 'Control Box'), 'url' =>Yii::$app->user->isGuest ?['site/login']: ['/control/list'],],
                    ['label' => Yii::t('app', 'Camera Viewer'), 'url' => Yii::$app->user->isGuest ?['site/login']:['/cameraviewer/index'],],
                    ['label' => Yii::t('app', 'Graphs'), 'url' =>Yii::$app->user->isGuest ?['site/login']: ['/graphs/index'],],
                    ['label' => Yii::t('app', 'Phone Calls'), 'url' => Yii::$app->user->isGuest ?['site/login']:['/cdr/index'],],
                    ['label' => Yii::t('app', 'Log Files'), 'url' => Yii::$app->user->isGuest ?['site/login']:[ '/logs/index'],],
                    ['label' => Yii::t('app', 'Help',['class'=>'fa-flag']), 'url' => ['/site/help'],],
                ],
            ]);
            ?>
        </div>
        <div class="col-md-10">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <? /*= Alert::widget() */ ?>

            <?php //Get all flash messages and loop through them ?>
            <?php foreach (Yii::$app->session->getAllFlashes() as $message):; ?>
                <?php
                echo \kartik\widgets\Growl::widget([
                    'type' => (!empty($message['type'])) ? $message['type'] : 'danger',
                    //'title' => (!empty($message['title'])) ? Html::encode($message['title']) : 'Title Not Set!',
                    'icon' => (!empty($message['icon'])) ? $message['icon'] : 'fa fa-info',
                    'body' => (!empty($message)) ? Html::encode($message) : 'Message Not Set!',
                    'showSeparator' => true,
                    'delay' => 1, //This delay is how long before the message shows
                    'pluginOptions' => [
                        'delay' => (!empty($message['duration'])) ? $message['duration'] : 3000, //This delay is how long the message shows for
                        'placement' => [
                            'from' => (!empty($message['positonY'])) ? $message['positonY'] : 'top',
                            'align' => (!empty($message['positonX'])) ? $message['positonX'] : 'right',
                        ]
                    ]
                ]);
                ?>
            <?php endforeach; ?>
        <?= $content ?>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }
    form div.required label.control-label:after {
        content:" * ";
        color:red;
    }
</style>
<script>
    $(document).ready(function () {
        $('.dropdown-submenu > ul').addClass('dropdown-menu');
    });

</script>