<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsLedmatrix;

/**
 * SettingsLedmatrixSearch represents the model behind the search form of `app\models\SettingsLedmatrix`.
 */
class SettingsLedmatrixSearch extends SettingsLedmatrix
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'color', 'speed', 'displayid', 'debug'], 'integer'],
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
        $query = SettingsLedmatrix::find();

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
            'color' => $this->color,
            'speed' => $this->speed,
            'displayid' => $this->displayid,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'serialport', $this->serialport]);

        return $dataProvider;
    }
}
