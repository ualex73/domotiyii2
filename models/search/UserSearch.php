<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UserSearch represents the model behind the search form of `app\models\Users`.
 */
class UserSearch extends Users
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'admin', 'options', 'tfaenabled'], 'integer'],
            [['username', 'password', 'fullname', 'comments', 'lastlogin', 'emailaddress', 'cookie', 'tfasecret'], 'safe'],
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
        $query = Users::find();

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
//            'id' => $this->id,
            'admin' => $this->admin,
////            'options' => $this->options,
////            'tfaenabled' => $this->tfaenabled,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'lastlogin', $this->lastlogin])
            ->andFilterWhere(['like', 'emailaddress', $this->emailaddress])
            ->andFilterWhere(['like', 'cookie', $this->cookie])
            ->andFilterWhere(['like', 'tfasecret', $this->tfasecret]);

        return $dataProvider;
    }
}
