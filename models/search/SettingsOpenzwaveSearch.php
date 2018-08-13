<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsOpenzwave;

/**
 * SettingsOpenzwaveSearch represents the model behind the search form of `app\models\SettingsOpenzwave`.
 */
class SettingsOpenzwaveSearch extends SettingsOpenzwave
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'reloadnodes', 'polltime', 'debug', 'enablepollsleeping', 'enablepolllistening', 'enableupdateneighbor'], 'integer'],
            [['serialport', 'baudrate', 'polltimesleeping', 'polltimelistening', 'updateneighbor'], 'safe'],
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
        $query = SettingsOpenzwave::find();

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
            'reloadnodes' => $this->reloadnodes,
            'polltime' => $this->polltime,
            'debug' => $this->debug,
            'enablepollsleeping' => $this->enablepollsleeping,
            'enablepolllistening' => $this->enablepolllistening,
            'enableupdateneighbor' => $this->enableupdateneighbor,
        ]);

        $query->andFilterWhere(['like', 'serialport', $this->serialport])
            ->andFilterWhere(['like', 'baudrate', $this->baudrate])
            ->andFilterWhere(['like', 'polltimesleeping', $this->polltimesleeping])
            ->andFilterWhere(['like', 'polltimelistening', $this->polltimelistening])
            ->andFilterWhere(['like', 'updateneighbor', $this->updateneighbor]);

        return $dataProvider;
    }
}
