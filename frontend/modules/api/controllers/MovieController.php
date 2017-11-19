<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class MovieController extends ActiveController
{
    public $modelClass = 'app\modules\api\models\Movie';
}
