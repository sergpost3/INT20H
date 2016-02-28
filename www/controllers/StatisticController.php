<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Videos;
use app\models\Comments;
use app\models\Users;
use app\models\User;
use app\models\PostViews;

class StatisticController extends Controller
{
    public function actionIndex() {
        $comments = Comments::find()
            ->orderBy( "`likes_count` DESC" )
            ->offset( 0 )
            ->limit( 10 )
            ->all();

        foreach($comments as $key=>$value) {
            $comments[$key]->user = Users::find()
                ->where( [ "id" => $value->user_id ] )
                ->one();
        }

        $res = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE 1"));
        print_r($res);

        $data = [
            "comments" => $comments
        ];

        return $this->render( "index", $data );
    }
}
