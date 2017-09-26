<?php

namespace backend\modules\manager\models;

use Yii;

/**
 * This is the model class for table "tbl_banner".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property integer $status
 * @property integer $user_id
 * @property string $created_at
 * @property string $updated_at
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'image', 'status', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['id', 'status', 'user_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
            'status' => 'Status',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
