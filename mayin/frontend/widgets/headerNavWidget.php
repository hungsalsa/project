<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use app\modules\product\models\Category;

class headerNavWidget extends Widget
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
        $cat = new Category;
        $dataCat = $cat->getCategoryByParent();
        return $this->render('headerNavWidget',['dataCat'=>$dataCat]);
    }
}