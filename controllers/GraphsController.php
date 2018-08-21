<?php
namespace app\controllers;
use app\components\ActiveRecord;
use app\components\CustomController;
use app\models\Devices;
use app\models\Graphs;
use yii\db\Expression;
use yii\web\Controller;
use Yii;
class GraphsController extends CustomController {

    public function actionIndex() {

		// For the YiiGraphs, a database table is to be created!
		// Here we check if the table is already available if not we create the table!
		try{
			// execute query
			$list = Yii::$app->db->createCommand("SELECT count(1) FROM yii_graphs")->queryOne();

			//Table exists so do nothing!!!
		} catch(Exception $tbe) {
			////Table does not exists so create it! 
			$create_sql = "CREATE TABLE `yii_graphs` (
						  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
						  `name` varchar(45) NOT NULL,
						  `enabled` varchar(45) NOT NULL,
						  `type` varchar(45) NOT NULL,
						  `group` varchar(45) DEFAULT NULL,
						  `description` varchar(45) DEFAULT NULL,
						  `device_value_01` int(11) unsigned DEFAULT NULL,
						  `device_value_02` int(11) unsigned DEFAULT NULL,
						  `device_value_03` int(11) unsigned DEFAULT NULL,
						  `device_value_04` int(11) unsigned DEFAULT NULL,
						  `created_date` datetime DEFAULT NULL,
						  `graph_width` int(11) DEFAULT NULL,
						  `graph_height` int(11) DEFAULT NULL,
						  PRIMARY KEY (`id`)
						) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1";

			try{
				// execute query create statement
				Yii::$app->db->createCommand($create_sql)->execute();
			} catch(Exception $tbe) {
				//Something wrong....
				Yii::$app->session->setFlash('error', Yii::t('app', 'Cannot create table in DomotiGa\'s database!'));
			}
		}

        $results =$this->getFilter();
        $tab = [];
        foreach ($results as $obj) {

            $row = array(
                'id' => $obj->id,
                'name' => $obj->name,
                'location' => $obj->location->name,
                'lastchanged' => $obj['lastchanged']
            );

            $tab[] = $row;
        }
        if (!is_null(yii::$app->request->get('ajax'))) {
            $data = array('aaData' => $tab);
            die($this->renderPartial('jsonData', array('data' => $data), TRUE));
        }
        else
         return  $this->render('index', array('data' => $tab));
    }

    private function getFilter() {
        $res = Devices::find();
        $type = yii::$app->request->get('type', 'All');
        $location = yii::$app->request->get('location', 'All');
        if ($type == 'Control') {
            $res->andFilterWhere(['enabled'=>'-1']);
            $res->andFilterWhere(['hide'=>'0']);
            $res->andFilterWhere(['OR',['switchable'=> -1],['dimable'=>-1]]);
        } else if ($type == 'All' OR $type == 'Dashboard') {
            $res->andWhere(new Expression('enabled is TRUE'));
            $res->andWhere(new Expression('hide is FALSE'));
        } else if ($type == 'Sensors') {
            $res->andFilterWhere(['enabled'=>'-1']);
            $res->andFilterWhere(['hide'=>'0']);
            $res->andFilterWhere(['switchable' => 0, 'dimable' => 0]);
        }
        if ($location !== 'All') {
            $res->joinWith('location');
            $res->andWhere(['locations.name'=>$location]);
        }
//        $a=$res->createCommand()->rawSql;
       
        $results=$res->all();
        return $results;
    }

    /*
      This functions returns an array with the location id.
     */

    public function getLocation($name) {
        // Create all the yiiGraphs
		$sql = "SELECT l.id FROM locations l WHERE l.name ='" . $name . "';";

        // execute query
        $list = Yii::$app->db->createCommand($sql)->queryAll();

        $rs = array();
        foreach ($list as $item) {
            $rs[] = $item['id'];
        }
        return $rs;
    }	
	
    /*
      This functions returns an array with the chart details set in the device value log.
     */

//    public function getYiiGraphs() {
//        // Create all the yiiGraphs
//		$sql = "SELECT g.id,
//					concat(g.name, ' - ', g.type ) as description
//				  FROM yii_graphs g
//				  WHERE g.enabled = -1;";
//
//        // execute query
//        $list = Yii::$app->db->createCommand($sql)->queryAll();
//
//        $rs = array();
//        foreach ($list as $item) {
//            $rs[$item['id']] = $item['description'];
//        }
//		ksort($rs);
//
//        return $rs;
//    }

    /*
      This functions returns an array with the chart details set in the device value log.
     */

    public function actionGetGraphData() {

        if (isset($_GET['data'])) {
            $encryptedMysqlConnection = $_GET['data'];
        }

        if (isset($_GET['fromdate'])) {
			$fromdate = date("Y-m-d", strtotime($_GET['fromdate']));
        }

        if (isset($_GET['todate'])) {
			$todate = date("Y-m-d", strtotime($_GET['todate']));
        }
		
        if (isset($_GET['device'])) {
            $device_id = $_GET['device'];
        }

        if (isset($_GET['dev_valnum'])) {
            $dev_valnum = $_GET['dev_valnum'];
        }		

        if (isset($_GET['chartname'])) {
            $chartname = $_GET['chartname'];
        }

        if (isset($_GET['charttype'])) {
            $charttype = $_GET['charttype'];
        }
		
        if (isset($_GET['chartval'])) {
            $chartval = $_GET['chartval'];
        }

        if (isset($_GET['callback'])) {
            $callback = $_GET['callback'];
            if (!preg_match('/^[a-zA-Z0-9_]+$/', $callback)) {
                die('Invalid callback name');
            }
        }

        if (isset($_GET['start'])) {
            $start = $_GET['start'];
            if ($start && !preg_match('/^[0-9]+$/', $start)) {
                die("Invalid start parameter: $start");
            }
        } else {
            $start = 0;
        }

        if (isset($_GET['end'])) {
            $end = $_GET['end'];
            if ($end && !preg_match('/^[0-9]+$/', $end)) {
                die("Invalid end parameter: $end");
            }
        } else {
            $end = time() * 1000;
        }

        $range = $end - $start;
        $startTime = gmstrftime('%Y-%m-%d %H:%M:%S', $start / 1000);
        $endTime = gmstrftime('%Y-%m-%d %H:%M:%S', $end / 1000);

		////////////////////////////
		//Chart types:
		// 0 = none
		// 1 = Barchart
		// 2 = Linechart
		// 3 = Gauge
		/////////////////////////////
	
        $date_column = "unix_timestamp(CONCAT(date(dvl.lastchanged), ' ', maketime(HOUR(dvl.lastchanged),MINUTE(dvl.lastchanged),0))) * 1000";

        $sql = "select  $date_column  as datum, 
			SUM( IF( dvl.value='$chartval', 1, 0 ) ) as value1
			FROM devices d
			inner join device_values dv on d.id = dv.device_id 
			inner join device_values_log dvl on d.id = dvl.device_id and dv.valuenum = dvl.valuenum
			where dv.valuerrddsname = '$chartname'
			and d.id =$device_id
			and dvl.valuenum = $dev_valnum
			and cast( dvl.lastchanged as date) between '$fromdate' and '$todate'
			group by  $date_column 
			order by dvl.lastchanged;";

		if ($charttype == 2) {
			$sql = "select  $date_column  as datum, 
				dvl.value as value1
				FROM domotiga.devices d
				inner join domotiga.device_values dv on d.id = dv.device_id 
				inner join domotiga.device_values_log dvl on d.id = dvl.device_id 
					and dv.valuenum = dvl.valuenum
				where d.id = $device_id
				and dvl.valuenum = $dev_valnum
				and cast( dvl.lastchanged as date) between '$fromdate' and '$todate'
				order by dvl.lastchanged;";
		}

// set UTC time
        Yii::$app->db->createCommand("SET time_zone = '+00:00'")->execute();

        $result = Yii::$app->db->createCommand($sql)->queryAll();
        $rows = array();
        foreach($result as $r) {
            $rows[] = "[{$r['datum']},{$r['value1']}]";
        }

        header('Content-Type: text/javascript');
        \Yii::$app->response->data =  $callback . "([\n" . join(",\n", $rows) . "\n]);";
    }

}