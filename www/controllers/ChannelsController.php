<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Videos;

class ChannelsController extends Controller
{
    public function actionIndex()
    {
		$video = Videos::find()
            ->where( [ "url" => Yii::$app->request->get( "video_name" ) ] )
			->one();
        if( count( $video ) == 0 )
            throw new \yii\web\NotFoundHttpException();
		else {
			$video->views_count++;
			$video->save();
			
//$identity = Yii::$app->getUser()->getIdentity();
//var_dump($identity->profile);
			
			return $this->render('index', ["video"=>$video]);
		}
    }
}
