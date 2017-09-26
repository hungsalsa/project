<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use app\modules\product\models\Product;

class sidebarWidget extends Widget
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
        $ranData = new Product();
        $ranData = $ranData->getRandomProduct();
        $myUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
        // Get domain portion
        $myUrl .= '://'.$_SERVER['HTTP_HOST'];
        return $this->render('sidebarWidget',['ranData'=>$ranData,'myUrl'=>$myUrl]);
    }
}