<?php
namespace app\modules\admin\controllers;

use yii\web\Controller;

class AdminBaseController extends BaseController {
    /**
     * Javascript URL
     *
     * @var string
     */
    public $jsUrl = '';

    /**
     * Class constructor
     *
     */
    public function init() {
        $app = Yii::app();
        if (isset($_GET['lang'])) {
            $app->session['lang'] = $_GET['lang'];
        }
        if (isset($app->session['lang'])) {
            $app->language = $app->session['lang'];
        }

        // Add Js
        $this->jsUrl = Yii::app()->theme->baseUrl . '/scripts';

		// Add default page title which is the application name
        $this->pageTitle[] = Yii::t('global', Yii::app()->name);
		
		// By default we register the robots to 'all'
		// we wil override this when we need to
        Yii::app()->clientScript->registerMetaTag( 'all', 'robots' );

		// We add a meta 'language' tag based on the currently viewed language
		Yii::app()->clientScript->registerMetaTag( Yii::app()->language, 'language', 'content-language' );
        
        Yii::app()->counter->refresh();
        
        Visitors::run();

        /* Run init */
        parent::init();
    }


	/**
	 * @return array - List of filters
	 */
	public function filters()
	{
		return array(
    		array(
    			'application.filters.YXssFilter',
    			'clean' => 'none',
    			'tags' => 'soft',
    			'actions' => 'all'
    			)
    		);
	}
}