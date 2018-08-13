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
            [['id', 'enabled', 'graph_height', 'graph_width', 'color_background', 'color_canvas', 'color_shadea', 'color_shadeb', 'color_font', 'color_grid', 'color_majorgrid', 'color_frame', 'color_axis', 'color_arrow', 'logarithmic_scale', 'date'], 'integer'],
            [['name', 'comments', 'graph_title', 'unit', 'grid_type', 'groups'], 'safe'],
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
            'enabled' => $this->enabled,
            'graph_height' => $this->graph_height,
            'graph_width' => $this->graph_width,
            'color_background' => $this->color_background,
            'color_canvas' => $this->color_canvas,
            'color_shadea' => $this->color_shadea,
            'color_shadeb' => $this->color_shadeb,
            'color_font' => $this->color_font,
            'color_grid' => $this->color_grid,
            'color_majorgrid' => $this->color_majorgrid,
            'color_frame' => $this->color_frame,
            'color_axis' => $this->color_axis,
            'color_arrow' => $this->color_arrow,
            'logarithmic_scale' => $this->logarithmic_scale,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'graph_title', $this->graph_title])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'grid_type', $this->grid_type])
            ->andFilterWhere(['like', 'groups', $this->groups]);

        return $dataProvider;
    }
}
