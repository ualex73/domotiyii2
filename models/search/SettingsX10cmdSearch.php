<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsX10cmd;

/**
 * SettingsX10cmdSearch represents the model behind the search form of `app\models\SettingsX10cmd`.
 */
class SettingsX10cmdSearch extends SettingsX10cmd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'monitor', 'globalx10', 'type', 'debug'], 'integer'],
            [['command'], 'safe'],
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
        $query = SettingsX10cmd::find();

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
            'monitor' => $this->monitor,
            'globalx10' => $this->globalx10,
            'type' => $this->type,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'command', $this->command]);

        return $dataProvider;
    }
}
