<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 26.03.2016
 * Time: 9:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Indexx extends ActiveRecord{

    public static function tableName(){
        return 'indexx';
    }
    public function attributeLabels(){
        return [
            'name'=> 'Имя',
            'date'=>'',
            'comment'=>'Ваш Комментарий',
           
        ];
    }

    public function rules(){

        return [
            ['name', 'required', 'message' => 'Пожалуйста, введите Имя'],
            ['comment', 'required', 'message' => 'Пожалуйста, Введите Комментарий'],
        ];
    }

}