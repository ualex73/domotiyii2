<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsNma;

/**
 * SettingsNmaSearch represents the model behind the search form of `app\models\SettingsNma`.
 */
class SettingsNmaSearch extends SettingsNma
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'debug'], 'integer'],
            [['apikey', 'application', 'event'], 'safe'],
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
        $query = SettingsNma::find();

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
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'apikey', $this->apikey])
            ->andFilterWhere(['like', 'application', $this->application])
            ->andFilterWhere(['like', 'event', $this->event]);

        return $dataProvider;
    }
}
