<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Videos;
use app\models\Comments;
use app\models\Users;

class ChannelsController extends Controller
{
    public function actionIndex() {
        if(Yii::$app->request->post( "video_id" )) {
            $user_id = 1;
            $comment = new Comments();
            $comment->user_id = $user_id;
            $comment->post_id = Yii::$app->request->post( "video_id" );
            $comment->comment = nl2br(Yii::$app->request->post( "comment_text" ));
            $comment->likes_count = 0;
            $comment->dislikes_count = 0;
            $comment->time = time();
            $comment->save();
        }

        $video = Videos::find()
            ->where( [ "url" => Yii::$app->request->get( "video_name" ) ] )
            ->one();
        if( count( $video ) == 0 )
            throw new \yii\web\NotFoundHttpException();
        else {
            $video->views_count++;
            $video->save();

            $comments = Comments::find()
                ->where( [ "post_id" => $video->id ] )
                ->orderBy( "`time` DESC" )
                ->all();

            foreach($comments as $key=>$value) {
                $comments[$key]->user = Users::find()
                    ->where( [ "id" => $value->user_id ] )
                    ->one();
            }

            return $this->render( 'index', [ "video" => $video, "comments" => $comments ] );
        }
    }
}
