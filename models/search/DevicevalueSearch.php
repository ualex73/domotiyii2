<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DeviceValues;

/**
 * DevicevalueSearch represents the model behind the search form of `app\models\Devicevalues`.
 */
class DevicevalueSearch extends DeviceValues
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'device_id', 'valuenum', 'log', 'logdisplay', 'logspeak', 'rrd', 'graph', 'type_id', 'feedback', 'control'], 'integer'],
            [['value', 'correction', 'units', 'valuerrddsname', 'valuerrdtype', 'lastchanged', 'lastseen', 'description'], 'safe'],
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
        $query = DeviceValues::find();

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
            'device_id' => $this->device_id,
            'valuenum' => $this->valuenum,
            'log' => $this->log,
            'logdisplay' => $this->logdisplay,
            'logspeak' => $this->logspeak,
            'rrd' => $this->rrd,
            'graph' => $this->graph,
            'lastchanged' => $this->lastchanged,
            'lastseen' => $this->lastseen,
            'type_id' => $this->type_id,
            'feedback' => $this->feedback,
            'control' => $this->control,
        ]);

        $query->andFilterWhere(['like', 'value', $this->value])
            ->andFilterWhere(['like', 'correction', $this->correction])
            ->andFilterWhere(['like', 'units', $this->units])
            ->andFilterWhere(['like', 'valuerrddsname', $this->valuerrddsname])
            ->andFilterWhere(['like', 'valuerrdtype', $this->valuerrdtype])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
