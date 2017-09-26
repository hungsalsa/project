<?php

namespace backend\modules\product\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tbl_suppliers".
 *
 * @property integer $suppID
 * @property string $companyName
 * @property string $addressName
 * @property integer $phone
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Suppliers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_suppliers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['companyName', 'addressName', 'created_at', 'updated_at'], 'required'],
            [['phone', 'status', 'created_at', 'updated_at'], 'integer'],
            [['companyName', 'addressName', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'suppID' => 'Supp ID',
            'companyName' => 'Company Name',
            'addressName' => 'Address Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllSuppliers()
    {
        return ArrayHelper::map(Suppliers::find()->where(['status'=>'1'])->all(),'suppID','companyName');
    }
}
