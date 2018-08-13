<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsDsc;

/**
 * SettingsDscSearch represents the model behind the search form of `app\models\SettingsDsc`.
 */
class SettingsDscSearch extends SettingsDsc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'baudrate', 'type', 'debug'], 'integer'],
            [['serialport', 'mastercode'], 'safe'],
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
        $query = SettingsDsc::find();

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
            'baudrate' => $this->baudrate,
            'type' => $this->type,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'serialport', $this->serialport])
            ->andFilterWhere(['like', 'mastercode', $this->mastercode]);

        return $dataProvider;
    }
}
