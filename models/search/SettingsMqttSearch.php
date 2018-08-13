<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsMqtt;

/**
 * SettingsMqttSearch represents the model behind the search form of `app\models\SettingsMqtt`.
 */
class SettingsMqttSearch extends SettingsMqtt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'tcpport', 'heartbeat', 'retain', 'qos', 'debug', 'enablepublish', 'enablesubscribe', 'sslenabled', 'sslcertificate_id', 'birthlastwill', 'sendallvalues'], 'integer'],
            [['tcphost', 'username', 'password', 'pubtopic', 'subtopic', 'clientname'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SettingsMqtt::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'enabled' => $this->enabled,
            'tcpport' => $this->tcpport,
            'heartbeat' => $this->heartbeat,
            'retain' => $this->retain,
            'qos' => $this->qos,
            'debug' => $this->debug,
            'enablepublish' => $this->enablepublish,
            'enablesubscribe' => $this->enablesubscribe,
            'sslenabled' => $this->sslenabled,
            'sslcertificate_id' => $this->sslcertificate_id,
            'birthlastwill' => $this->birthlastwill,
            'sendallvalues' => $this->sendallvalues,
        ]);

        $query->andFilterWhere(['like', 'tcphost', $this->tcphost])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'pubtopic', $this->pubtopic])
            ->andFilterWhere(['like', 'subtopic', $this->subtopic])
            ->andFilterWhere(['like', 'clientname', $this->clientname]);

        return $dataProvider;
    }
}
