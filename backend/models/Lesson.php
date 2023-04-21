<?php

namespace backend\models;
class Lesson extends \yii\db\ActiveRecord
{
    public function rules()
    {
        return[
            [['id'], 'required'],
            [['name'], 'required'],
        ];
    }

    public static function tableName()
    {
        return 'lesson';
    }
}