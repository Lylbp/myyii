<?php

namespace app\controllers;

use yii\web\Controller;


class TestController extends Controller
{
    public function actionSay($message = 'Hello')
    {
        $data['arr'] = array("a","b");
        return $this->render('say.twig', $data);
    }
}
