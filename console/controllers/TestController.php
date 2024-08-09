<?php

namespace console\controllers;

use yii\console\Controller;
use yii\helpers\Console;
class TestController extends Controller
{
    /**
     * Тут можна зробити опис
     * @return void
     */
    public function actionIndex($message)
    {
        echo $message . PHP_EOL;

    }

    public function actionProgress()
    {
        $i = 0;
        Console::startProgress(0, 100);

        while ($i < 100){
            $i++;
            Console::updateProgress($i, 100);
            sleep(1);
        }

        Console::endProgress();


    }
}