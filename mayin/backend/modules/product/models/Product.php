<?php

namespace backend\modules\product\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $proID
 * @property string $productName
 * @property integer $price
 * @property integer $saleOf
 * @property string $startSale
 * @property string $endSale
 * @property integer $priceSale
 * @property integer $quanlity
 * @property string $size
 * @property string $color
 * @property integer $evaluation
 * @property string $image
 * @property string $keyword
 * @property string $description
 * @property string $content
 * @property integer $group_ID
 * @property integer $cateID
 * @property integer $suppliresID
 * @property integer $userID
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productName', 'keyword', 'description', 'content', 'group_ID', 'cateID', 'created_at', 'updated_at'], 'required'],
            [['price', 'saleOf', 'priceSale', 'quanlity', 'evaluation', 'group_ID', 'cateID', 'suppliresID', 'userID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['startSale', 'endSale'], 'safe'],
            [['description', 'content'], 'string'],
            [['productName', 'size', 'color', 'image', 'keyword'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proID' => 'Pro ID',
            'productName' => 'Product Name',
            'price' => 'Price',
            'saleOf' => 'Sale Of',
            'startSale' => 'Start Sale',
            'endSale' => 'End Sale',
            'priceSale' => 'Price Sale',
            'quanlity' => 'Quanlity',
            'size' => 'Size',
            'color' => 'Color',
            'evaluation' => 'Evaluation',
            'image' => 'Image',
            'keyword' => 'Keyword',
            'description' => 'Description',
            'content' => 'Content',
            'group_ID' => 'Group  ID',
            'cateID' => 'Cate ID',
            'suppliresID' => 'Supplires ID',
            'userID' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
