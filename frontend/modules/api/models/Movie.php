<?php

namespace app\modules\api\models;

use yii\db\ActiveRecord;

class Movie extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movie';
    }
}
