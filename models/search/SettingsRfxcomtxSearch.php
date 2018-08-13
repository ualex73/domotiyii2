<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsRfxcomtx;

/**
 * SettingsRfxcomtxSearch represents the model behind the search form of `app\models\SettingsRfxcomtx`.
 */
class SettingsRfxcomtxSearch extends SettingsRfxcomtx
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'tcpport', 'relayenabled', 'handshake', 'relayport', 'disablex10', 'enablearc', 'enableharrison', 'enablekoppla', 'rfxmitter', 'debug'], 'integer'],
            [['tcphost', 'type', 'serialport', 'baudrate'], 'safe'],
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
        $query = SettingsRfxcomtx::find();

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
            'relayenabled' => $this->relayenabled,
            'handshake' => $this->handshake,
            'relayport' => $this->relayport,
            'disablex10' => $this->disablex10,
            'enablearc' => $this->enablearc,
            'enableharrison' => $this->enableharrison,
            'enablekoppla' => $this->enablekoppla,
            'rfxmitter' => $this->rfxmitter,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'tcphost', $this->tcphost])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'serialport', $this->serialport])
            ->andFilterWhere(['like', 'baudrate', $this->baudrate]);

        return $dataProvider;
    }
}
