<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.08.2015
 * Time: 10:53
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['email'], 'email'],
        ];
    }
}
$model = new EntryForm();
$model->name = 'Quang';
$model->email = 'wrong';
if ($model->validate()){
    //Good!
} else {
    //Failure!
    // Use $model->getErrors()
}
