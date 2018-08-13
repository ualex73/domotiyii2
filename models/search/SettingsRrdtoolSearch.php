<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsRrdtool;

/**
 * SettingsRrdtoolSearch represents the model behind the search form of `app\models\SettingsRrdtool`.
 */
class SettingsRrdtoolSearch extends SettingsRrdtool
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'polltime', 'enabled', 'debug', 'width', 'height'], 'integer'],
            [['rra'], 'safe'],
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
        $query = SettingsRrdtool::find();

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
            'polltime' => $this->polltime,
            'enabled' => $this->enabled,
            'debug' => $this->debug,
            'width' => $this->width,
            'height' => $this->height,
        ]);

        $query->andFilterWhere(['like', 'rra', $this->rra]);

        return $dataProvider;
    }
}
