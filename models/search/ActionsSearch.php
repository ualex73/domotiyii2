<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Actions;

/**
 * ActionsSearch represents the model behind the search form of `app\models\Actions`.
 */
class ActionsSearch extends Actions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type'], 'integer'],
            [['name', 'description', 'param1', 'param2', 'param3', 'param4', 'param5'], 'safe'],
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
        $query = Actions::find();

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
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'param1', $this->param1])
            ->andFilterWhere(['like', 'param2', $this->param2])
            ->andFilterWhere(['like', 'param3', $this->param3])
            ->andFilterWhere(['like', 'param4', $this->param4])
            ->andFilterWhere(['like', 'param5', $this->param5]);

        return $dataProvider;
    }
}
