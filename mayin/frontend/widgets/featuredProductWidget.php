<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use app\modules\product\models\Product;
class featuredProductWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        $product = new Product();
        $feaProduct = $product->getNewProduct();
        return $this->render('featuredProductWidget',['feaProduct'=>$feaProduct]);
    }
}