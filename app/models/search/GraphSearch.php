<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Graphs;

/**
 * GraphSearch represents the model behind the search form of `app\models\Graphs`.
 */
class GraphSearch extends Graphs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'device_value_01', 'device_value_02', 'device_value_03', 'device_value_04', 'graph_width', 'graph_height'], 'integer'],
            [['name', 'enabled', 'type', 'group', 'description', 'created_date'], 'safe'],
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
        $query = Graphs::find();

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
            'device_value_01' => $this->device_value_01,
            'device_value_02' => $this->device_value_02,
            'device_value_03' => $this->device_value_03,
            'device_value_04' => $this->device_value_04,
            'created_date' => $this->created_date,
            'graph_width' => $this->graph_width,
            'graph_height' => $this->graph_height,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'enabled', $this->enabled])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'group', $this->group])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
