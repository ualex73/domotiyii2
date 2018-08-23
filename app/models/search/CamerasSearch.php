<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DeviceCameras;

/**
 * CamerasSearch represents the model behind the search form of `app\models\DeviceCameras`.
 */
class CamerasSearch extends DeviceCameras
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'viscaaddress', 'enabled'], 'integer'],
            [['name', 'type', 'cmdoptions', 'viewstring', 'grabstring', 'ptztype', 'ptzbaseurl', 'description', 'username', 'passwd'], 'safe'],
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
        $query = DeviceCameras::find();

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
            'viscaaddress' => $this->viscaaddress,
            'enabled' => $this->enabled,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'cmdoptions', $this->cmdoptions])
            ->andFilterWhere(['like', 'viewstring', $this->viewstring])
            ->andFilterWhere(['like', 'grabstring', $this->grabstring])
            ->andFilterWhere(['like', 'ptztype', $this->ptztype])
            ->andFilterWhere(['like', 'ptzbaseurl', $this->ptzbaseurl])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'passwd', $this->passwd]);

        return $dataProvider;
    }
}
