<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "myarticle_tag".
 *
 * @property int $id
 */
class MyarticleTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'myarticle_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
}
