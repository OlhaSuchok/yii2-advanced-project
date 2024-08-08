<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;


class RbacController extends Controller
{
    public function actionInit()
    {
echo 'init';
        $auth = Yii::$app->authManager;
////        $auth->removeAll(); //удаляем старые данные
//
////Создадим для примера права для доступа к админке
//        $dashboard = $auth->createPermission('canContent');
//        $dashboard->description = 'Контент';
//        $auth->add($dashboard);

//        $editor = $auth->createRole('editor');
//        $editor->description = 'Editor';
//        $auth->add($editor);

        $editor = $auth->getRole('editor');
//        $content = $auth->getPermission('canContent');
//        $auth->addChild($admin, $editor);


        $auth->assign($editor, 2);




//Добавляем объект определяющий правила для ролей пользователей, он будет сохранен в файл rules.php
//        $rule = new UserRoleRule();
//        $auth->add($rule);
//
////Добавляем роли
//        $user = $auth->createRole('user');
//        $user->description = 'Пользователь';
//        $user->ruleName = $rule->name;
//        $auth->add($user);
//
//        $moder = $auth->createRole('moder');
//        $moder->description = 'Модератор';
//        $moder->ruleName = $rule->name;
//        $auth->add($moder);
////Добавляем потомков
//        $auth->addChild($moder, $user);
//        $auth->addChild($moder, $dashboard);
//
//        $admin = $auth->createRole('admin');
//        $admin->description = 'Администратор';
//        $admin->ruleName = $rule->name;
//        $auth->add($admin);
//        $auth->addChild($admin, $moder);




    }
}