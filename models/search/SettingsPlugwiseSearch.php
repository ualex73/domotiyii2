<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsPlugwise;

/**
 * SettingsPlugwiseSearch represents the model behind the search form of `app\models\SettingsPlugwise`.
 */
class SettingsPlugwiseSearch extends SettingsPlugwise
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'polltime', 'busytime', 'debug'], 'integer'],
            [['serialport'], 'safe'],
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
        $query = SettingsPlugwise::find();

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
            'busytime' => $this->busytime,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'serialport', $this->serialport]);

        return $dataProvider;
    }
}
