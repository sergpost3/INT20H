<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }
	
	public function behaviors() {
		return array(
			'eauth' => array(
				// required to disable csrf validation on OpenID requests
				'class' => \nodge\eauth\openid\ControllerBehavior::className(),
				'only' => array('login'),
			),
		);
	}
	
	public function actionLogin() {
        $serviceName = Yii::$app->getRequest()->getQueryParam('service');
        if (isset($serviceName)) {
            /** @var $eauth \nodge\eauth\ServiceBase */
            $eauth = Yii::$app->get('eauth')->getIdentity($serviceName);
            $eauth->setRedirectUrl(Yii::$app->getUser()->getReturnUrl());
            $eauth->setCancelUrl(Yii::$app->getUrlManager()->createAbsoluteUrl('site/login'));
 
            try {
                if ($eauth->authenticate()) {
//                  var_dump($eauth->getIsAuthenticated(), $eauth->getAttributes()); exit;
 
                    $identity = User::findByEAuth($eauth);
                    Yii::$app->getUser()->login($identity);
 
					$session = Yii::$app->getSession();
					$session['eauth_profile'] = $eauth;
					
                    // special redirect with closing popup window
                    $eauth->redirect();
                }
                else {
                    // close popup window and redirect to cancelUrl
                    $eauth->cancel();
                }
            }
            catch (\nodge\eauth\ErrorException $e) {
                // save error to show it later
                Yii::$app->getSession()->setFlash('error', 'EAuthException: '.$e->getMessage());
 
                // close popup window and redirect to cancelUrl
//              $eauth->cancel();
                $eauth->redirect($eauth->getCancelUrl());
            }
        }
 echo $this->render("login");
        // default authorization code through login/password ..
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
