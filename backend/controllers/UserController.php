<?php

namespace backend\controllers;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}