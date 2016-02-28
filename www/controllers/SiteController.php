<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Videos;
use app\models\Categories;

class SiteController extends Controller
{
    public function actions() {
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
                'only' => array( 'login' ),
            ),
        );
    }

    public function actionLogin() {
        $serviceName = Yii::$app->getRequest()->getQueryParam( 'service' );
        if( isset( $serviceName ) ) {
            /** @var $eauth \nodge\eauth\ServiceBase */
            $eauth = Yii::$app->get( 'eauth' )->getIdentity( $serviceName );
            $eauth->setRedirectUrl( Yii::$app->getUser()->getReturnUrl() );
            $eauth->setCancelUrl( Yii::$app->getUrlManager()->createAbsoluteUrl( 'site/login' ) );

            try {
                if( $eauth->authenticate() ) {
//                  var_dump($eauth->getIsAuthenticated(), $eauth->getAttributes()); exit;

                    $identity = User::findByEAuth( $eauth );
                    Yii::$app->getUser()->login( $identity );

                    $session = Yii::$app->getSession();
                    $session['eauth_profile'] = $eauth;

                    // special redirect with closing popup window
                    $eauth->redirect();
                }
                else {
                    // close popup window and redirect to cancelUrl
                    $eauth->cancel();
                }
            } catch ( \nodge\eauth\ErrorException $e ) {
                // save error to show it later
                Yii::$app->getSession()->setFlash( 'error', 'EAuthException: ' . $e->getMessage() );

                // close popup window and redirect to cancelUrl
//              $eauth->cancel();
                $eauth->redirect( $eauth->getCancelUrl() );
            }
        }
        echo $this->render( "login" );
        // default authorization code through login/password ..
    }

    public function actionIndex() {
        $videos = Videos::find()
            ->orderBy( "`time` DESC" )
            ->offset( 0 )
            ->limit( 6 )
            ->all();

        return $this->render( 'index', [ "videos" => $videos, "header" => "Last videos" ] );
    }

    public function actionLogout() {
        Yii::$app->getUser()->logout();
        return $this->redirect( '/' );
    }

    public function actionCategory() {

        $category = Categories::find()
            ->where( [ "url" => Yii::$app->request->get( "category_name" ) ] )
            ->one();
        if( count( $category ) == 0 )
            throw new \yii\web\NotFoundHttpException();
        else {
            $videos = Videos::find()
                ->where( [ "category" => $category->id ] )
                ->orderBy( "`time` DESC" )
                ->offset( 0 )
                ->limit( 4 )
                ->all();

            $header = "Last videos from category <b>{$category->name}</b>";
            return $this->render( 'index', [ "videos" => $videos, "header" => $header ] );
        }
    }
}
