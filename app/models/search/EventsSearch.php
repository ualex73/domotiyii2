<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Events;

/**
 * EventsSearch represents the model behind the search form of `app\models\Events`.
 */
class EventsSearch extends Events
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'log', 'trigger_id', 'condition1_id', 'condition2_id', 'rerunenabled', 'rerunvalue', 'category_id'], 'integer'],
            [['name', 'firstrun', 'lastrun', 'comments', 'operand', 'reruntype'], 'safe'],
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
        $query = Events::find();

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
            'log' => $this->log,
            'firstrun' => $this->firstrun,
            'lastrun' => $this->lastrun,
            'trigger_id' => $this->trigger_id,
            'condition1_id' => $this->condition1_id,
            'condition2_id' => $this->condition2_id,
            'rerunenabled' => $this->rerunenabled,
            'rerunvalue' => $this->rerunvalue,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'operand', $this->operand])
            ->andFilterWhere(['like', 'reruntype', $this->reruntype]);

        return $dataProvider;
    }
}
