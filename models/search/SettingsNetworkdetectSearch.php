<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsNetworkdetect;

/**
 * SettingsNetworkdetectSearch represents the model behind the search form of `app\models\SettingsNetworkdetect`.
 */
class SettingsNetworkdetectSearch extends SettingsNetworkdetect
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'polltime', 'enable_ping', 'enable_arpscan', 'timeout', 'debug'], 'integer'],
            [['interface'], 'safe'],
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
        $query = SettingsNetworkdetect::find();

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
            'enable_ping' => $this->enable_ping,
            'enable_arpscan' => $this->enable_arpscan,
            'timeout' => $this->timeout,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'interface', $this->interface]);

        return $dataProvider;
    }
}
