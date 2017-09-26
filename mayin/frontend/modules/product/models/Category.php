<?php

namespace app\modules\product\models;

use Yii;

/**
 * This is the model class for table "tbl_category".
 *
 * @property integer $idCate
 * @property string $cateName
 * @property integer $parent_id
 * @property string $keywords
 * @property string $icon
 * @property string $description
 * @property integer $group_ID
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cateName', 'keywords', 'description', 'group_ID', 'created_at', 'updated_at'], 'required'],
            [['parent_id', 'group_ID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['cateName', 'keywords', 'icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCate' => 'Id Cate',
            'cateName' => 'Cate Name',
            'parent_id' => 'Parent ID',
            'keywords' => 'Keywords',
            'icon' => 'Icon',
            'description' => 'Description',
            'group_ID' => 'Group  ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCategoryByParent($parent=0,$group=1,$status=1){
        $data = Category::find()->asArray()->where('parent_id =:parent and group_ID =:group and status=:status',['parent'=>$parent,'group'=>$group,'status'=>$status])->all();
        return $data;
    }
}
