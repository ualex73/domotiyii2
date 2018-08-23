<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsBwiredmap;

/**
 * SettingsBwiredmapSearch represents the model behind the search form of `app\models\SettingsBwiredmap`.
 */
class SettingsBwiredmapSearch extends SettingsBwiredmap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'pushtime', 'debug'], 'integer'],
            [['website', 'websitepicurl', 'title', 'city', 'user', 'password', 'screenname', 'gpslat', 'gpslong'], 'safe'],
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
        $query = SettingsBwiredmap::find();

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
            'pushtime' => $this->pushtime,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'websitepicurl', $this->websitepicurl])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'screenname', $this->screenname])
            ->andFilterWhere(['like', 'gpslat', $this->gpslat])
            ->andFilterWhere(['like', 'gpslong', $this->gpslong]);

        return $dataProvider;
    }
}
