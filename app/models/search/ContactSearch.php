<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contacts;

/**
 * ContactSearch represents the model behind the search form of `app\models\Contacts`.
 */
class ContactSearch extends Contacts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'holidaycard', 'callnr', 'type'], 'integer'],
            [['name', 'address', 'zipcode', 'city', 'country', 'phoneno', 'mobileno', 'email', 'cidphone', 'cidmobile', 'birthday', 'comments', 'firstname', 'surname', 'firstseen', 'lastseen'], 'safe'],
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
        $query = Contacts::find();

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
            'birthday' => $this->birthday,
            'holidaycard' => $this->holidaycard,
            'callnr' => $this->callnr,
            'type' => $this->type,
            'firstseen' => $this->firstseen,
            'lastseen' => $this->lastseen,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'phoneno', $this->phoneno])
            ->andFilterWhere(['like', 'mobileno', $this->mobileno])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cidphone', $this->cidphone])
            ->andFilterWhere(['like', 'cidmobile', $this->cidmobile])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'surname', $this->surname]);

        return $dataProvider;
    }
}
