<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsTemperaturnu;

/**
 * SettingsTemperaturnuSearch represents the model behind the search form of `app\models\SettingsTemperaturnu`.
 */
class SettingsTemperaturnuSearch extends SettingsTemperaturnu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'pushtime', 'debug', 'deviceid'], 'integer'],
            [['city', 'apikey', 'devicevalue'], 'safe'],
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
        $query = SettingsTemperaturnu::find();

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
            'pushtime' => $this->pushtime,
            'debug' => $this->debug,
            'deviceid' => $this->deviceid,
        ]);

        $query->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'apikey', $this->apikey])
            ->andFilterWhere(['like', 'devicevalue', $this->devicevalue]);

        return $dataProvider;
    }
}
