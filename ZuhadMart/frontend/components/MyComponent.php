<?php

namespace app\components;

use yii\base\Component;
// use yii\base\Event;
// use yii\db\Expression;
// use app\frontend\controllers\StatisticController;
// use app\models\Statistic;

class MyComponents extends Component
{
    public $label1;
    private $label2;

    public function welcome()
    {
        echo "this is welcome component";
    }

    public function setLabel2($var)
    {
        $this->$label2 = strlower($var);
    }

    public function getLabel2()
    {
        return $this->$label2;
    }

    public function StatisticHandler()
    {
        echo "<scrip>concole.log('event occured')</scrip>";

        //add to statistic
        // $model = new Statistic(); 

        // $model->access_time = new Expression('NOW()');
        // $model->user_ip = Yii::$app->request->userIP;
        // $model->user_host = Yii::$app->request->hostName;
        // $model->path_info = Yii::$app->request->pathInfo;
        // $model->query_string = Yii::$app->request->queryString;

        // $model->save();
            
    }
}