<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsP2000;

/**
 * SettingsP2000Search represents the model behind the search form of `app\models\SettingsP2000`.
 */
class SettingsP2000Search extends SettingsP2000
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'messages', 'georange', 'fetchimage', 'maplink', 'polltime', 'debug'], 'integer'],
            [['regios', 'discipline', 'filter'], 'safe'],
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
        $query = SettingsP2000::find();

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
            'messages' => $this->messages,
            'georange' => $this->georange,
            'fetchimage' => $this->fetchimage,
            'maplink' => $this->maplink,
            'polltime' => $this->polltime,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'regios', $this->regios])
            ->andFilterWhere(['like', 'discipline', $this->discipline])
            ->andFilterWhere(['like', 'filter', $this->filter]);

        return $dataProvider;
    }
}
