<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsSmartmeter;

/**
 * SettingsSmartmeterSearch represents the model behind the search form of `app\models\SettingsSmartmeter`.
 */
class SettingsSmartmeterSearch extends SettingsSmartmeter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'tcpport', 'databits', 'stopbits', 'parity', 'debug', 'updateinterval'], 'integer'],
            [['tcphost', 'type', 'serialport', 'baudrate', 'requestline'], 'safe'],
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
        $query = SettingsSmartmeter::find();

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
            'databits' => $this->databits,
            'stopbits' => $this->stopbits,
            'parity' => $this->parity,
            'debug' => $this->debug,
            'updateinterval' => $this->updateinterval,
        ]);

        $query->andFilterWhere(['like', 'tcphost', $this->tcphost])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'serialport', $this->serialport])
            ->andFilterWhere(['like', 'baudrate', $this->baudrate])
            ->andFilterWhere(['like', 'requestline', $this->requestline]);

        return $dataProvider;
    }
}
