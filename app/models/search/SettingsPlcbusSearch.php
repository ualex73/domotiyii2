<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsPlcbus;

/**
 * SettingsPlcbusSearch represents the model behind the search form of `app\models\SettingsPlcbus`.
 */
class SettingsPlcbusSearch extends SettingsPlcbus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'polltime', 'threephase', 'ack', 'debug'], 'integer'],
            [['serialport', 'baudrate', 'usercode', 'housecodes'], 'safe'],
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
        $query = SettingsPlcbus::find();

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
            'polltime' => $this->polltime,
            'threephase' => $this->threephase,
            'ack' => $this->ack,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'serialport', $this->serialport])
            ->andFilterWhere(['like', 'baudrate', $this->baudrate])
            ->andFilterWhere(['like', 'usercode', $this->usercode])
            ->andFilterWhere(['like', 'housecodes', $this->housecodes]);

        return $dataProvider;
    }
}
