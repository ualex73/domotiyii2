<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Devicevalueslog;

/**
 * DevicevaluelogSearch represents the model behind the search form of `app\models\Devicevalueslog`.
 */
class DevicevaluelogSearch extends Devicevalueslog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'device_id', 'valuenum'], 'integer'],
            [['value', 'lastchanged'], 'safe'],
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
        $query = Devicevalueslog::find();

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
            'lastchanged' => $this->lastchanged,
        ]);

        $query->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
