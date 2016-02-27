<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ChannelsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
	
    public function actionUkraine_today()
    {
        return $this->render('ukraine_today');
    }
	
    public function actionUnian_tv()
    {
        return $this->render('unian_tv');
    }
	
    public function actionBigudi()
    {
        return $this->render('bigudi');
    }
	
    public function action1plus1_international()
    {
        return $this->render('1plus1_international');
    }
	
    public function actionPlusplus()
    {
        return $this->render('plusplus');
    }
	
    public function actionTet()
    {
        return $this->render('tet');
    }
	
    public function action2plus2()
    {
        return $this->render('2plus2');
    }
	
    public function action1plus1()
    {
        return $this->render('1plus1');
    }
}
