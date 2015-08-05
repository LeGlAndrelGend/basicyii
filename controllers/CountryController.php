<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 05.08.2015
 * Time: 9:09
 */

namespace app\controllers;


use yii\web\Controller;

class CountryController extends Controller{

    public function actionIndex()
    {
        return $this->render('index');
    }

}