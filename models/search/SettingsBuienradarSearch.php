<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsBuienradar;

/**
 * SettingsBuienradarSearch represents the model behind the search form of `app\models\SettingsBuienradar`.
 */
class SettingsBuienradarSearch extends SettingsBuienradar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'polltime', 'debug', 'outputprecision', 'devmaxvalue', 'devtimevalue'], 'integer'],
            [['urlbuienradar', 'latitude', 'longitude', 'city', 'output'], 'safe'],
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
        $query = SettingsBuienradar::find();

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
            'debug' => $this->debug,
            'outputprecision' => $this->outputprecision,
            'devmaxvalue' => $this->devmaxvalue,
            'devtimevalue' => $this->devtimevalue,
        ]);

        $query->andFilterWhere(['like', 'urlbuienradar', $this->urlbuienradar])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'output', $this->output]);

        return $dataProvider;
    }
}
