<?php
namespace backend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class ModalBootstrapWidget extends Widget
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
        return $this->render('ModalBootstrapWidget');
    }
}