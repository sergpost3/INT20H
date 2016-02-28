<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Videos;
use app\models\Categories;
use app\models\Comments;
use app\models\PostLikes;
use app\models\CommentLikes;

class AjaxController extends Controller
{
    public function actionAddLike() {
        if( Yii::$app->request->isAjax ) {
            $data = Yii::$app->request->post( "video" );
            $user_id = 1;
            $video = Videos::find()
                ->where( [ "id" => $data ] )
                ->one();
            $a = PostLikes::find()
                ->where( [ "post_id" => intval( $data ), "user_id" => $user_id ] )
                ->one();
            if( count( $a ) == 1 ) {
                if( $a->type == "f" ) {
                    $a->type = "t";
                    $a->save();
                    $video->dislikes_count--;
                    $video->likes_count++;
                    $video->save();
                }
            }
            else {
                $a = new PostLikes();
                $a->post_id = $data;
                $a->user_id = $user_id;
                $a->type = "t";
                $a->time = time();
                $a->save();
                $video->likes_count++;
                $video->save();
            }
            return json_encode( [
                "likes" => $video->likes_count,
                "dislikes" => $video->dislikes_count
            ] );
        }
        else
            throw new \yii\web\NotFoundHttpException();
    }

    public function actionAddDislike() {
        if( Yii::$app->request->isAjax ) {
            $data = Yii::$app->request->post( "video" );
            $user_id = 1;
            $video = Videos::find()
                ->where( [ "id" => $data ] )
                ->one();
            $a = PostLikes::find()
                ->where( [ "post_id" => intval( $data ), "user_id" => $user_id ] )
                ->one();
            if( count( $a ) == 1 ) {
                if( $a->type == "t" ) {
                    $a->type = "f";
                    $a->save();
                    $video->dislikes_count++;
                    $video->likes_count--;
                    $video->save();
                }
            }
            else {
                $a = new PostLikes();
                $a->post_id = $data;
                $a->user_id = $user_id;
                $a->type = "f";
                $a->time = time();
                $a->save();
                $video->dislikes_count++;
                $video->save();
            }
            return json_encode( [
                "likes" => $video->likes_count,
                "dislikes" => $video->dislikes_count
            ] );
        }
        else
            throw new \yii\web\NotFoundHttpException();
    }

    public function actionAddLikeComment() {
        if( Yii::$app->request->isAjax ) {
            $data = intval( Yii::$app->request->post( "comment" ) );
            $user_id = 1;
            $comment = Comments::find()
                ->where( [ "id" => $data ] )
                ->one();
            $a = CommentLikes::find()
                ->where( [ "comment_id" => intval( $data ), "user_id" => $user_id ] )
                ->one();
            if( count( $a ) == 1 ) {
                if( $a->type == "f" ) {
                    $a->type = "t";
                    $a->save();
                    $comment->dislikes_count--;
                    $comment->likes_count++;
                    $comment->save();
                }
            }
            else {
                $a = new CommentLikes();
                $a->comment_id = $data;
                $a->user_id = $user_id;
                $a->type = "t";
                $a->time = time();
                $a->save();
                $comment->likes_count++;
                $comment->save();
            }
            return json_encode( [
                "likes" => $comment->likes_count,
                "dislikes" => $comment->dislikes_count
            ] );
        }
        else
            throw new \yii\web\NotFoundHttpException();
    }

    public function actionAddDislikeComment() {
        if( Yii::$app->request->isAjax ) {
            $data = intval( Yii::$app->request->post( "comment" ) );
            $user_id = 1;
            $comment = Comments::find()
                ->where( [ "id" => $data ] )
                ->one();
            $a = CommentLikes::find()
                ->where( [ "comment_id" => intval( $data ), "user_id" => $user_id ] )
                ->one();
            if( count( $a ) == 1 ) {
                if( $a->type == "t" ) {
                    $a->type = "f";
                    $a->save();
                    $comment->dislikes_count++;
                    $comment->likes_count--;
                    $comment->save();
                }
            }
            else {
                $a = new CommentLikes();
                $a->comment_id = $data;
                $a->user_id = $user_id;
                $a->type = "f";
                $a->time = time();
                $a->save();
                $comment->dislikes_count++;
                $comment->save();
            }
            return json_encode( [
                "likes" => $comment->likes_count,
                "dislikes" => $comment->dislikes_count
            ] );
        }
        else
            throw new \yii\web\NotFoundHttpException();
    }
}
