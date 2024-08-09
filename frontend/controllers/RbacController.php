<?php

namespace frontend\controllers;

use frontend\controllers\rbac\testAction;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class RbacController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index', 'test'],
                        'allow' => true,
                        'roles' => ['editor'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'test' => ['class' => TestAction::class]
        ];

    }

    public function actionIndex()
    {
        $auth = Yii::$app->authManager;

        // Check if a user can update a post (assuming user ID is 2)
        if ($auth->checkAccess(Yii::$app->user->identity->id, 'editor')) {
            // User 2 can update the post
            echo 'test';
        } else {
            // User 2 cannot update the post
            echo 'else test' . Yii::$app->user->identity->id;
        }

    }







}