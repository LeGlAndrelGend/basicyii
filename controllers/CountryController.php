<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 05.08.2015
 * Time: 9:09
 */

namespace app\controllers;


use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryController extends Controller{

    public function actionIndex()
    {
//        return $this->render('index');
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 7,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

}