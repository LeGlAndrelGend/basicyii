<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.08.2015
 * Time: 20:54
 */

namespace app\controllers;

use yii\console\Controller;
use yii\data\pagination;
use app\models\Country;

class CountryController extends Controller{

    public function actionIndex()
    {
        return $this->render('index');
//        $query = Country::find();
//
//        $pagination = new Pagination([
//            'defaultPageSize' => 5,
//            'totalCount' => $query->count(),
//        ]);
//
//        $countries = $query->orderBy('name')
//            ->offset($pagination->offset)
//            ->limit($pagination->limit)
//            ->all();
//
//        return $this->render('index', [
//            'countries' => $countries,
//            'pagination' => $pagination,
//            'msg' => 'yea',
//        ]);
    }
    public function actionSit()
    {
        return $this->render('two');
    }
}