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
        return $this->render( "index" );
    }
}
