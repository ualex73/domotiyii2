<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsCul;

/**
 * SettingsCulSearch represents the model behind the search form of `app\models\SettingsCul`.
 */
class SettingsCulSearch extends SettingsCul
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'tcpport', 'model', 'debug'], 'integer'],
            [['tcphost', 'type', 'serialport', 'baudrate', 'fhtid'], 'safe'],
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
        $query = SettingsCul::find();

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
            'tcpport' => $this->tcpport,
            'model' => $this->model,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'tcphost', $this->tcphost])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'serialport', $this->serialport])
            ->andFilterWhere(['like', 'baudrate', $this->baudrate])
            ->andFilterWhere(['like', 'fhtid', $this->fhtid]);

        return $dataProvider;
    }
}
