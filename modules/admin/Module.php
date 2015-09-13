<?php

namespace app\modules\admin;
use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $theme = 'customer';
    public $layout = 'admin';
    public function init()
    {
        //$this->defaultRoute = 'dashboard';
        // custom initialization code goes here
        

        /* Make sure we run the master module init function */
        parent::init();
        
        
    }
}
