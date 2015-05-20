<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\SearchForm;  


class General_ajaxController extends Controller
{    
    public function actionInsert_job_save($user_id , $job_id)
    {
        $model = new SearchForm();
        $rowcount = 0;  
        if ($user_id != '')
           {
        $rowcount =  $model->insert_job_save($user_id , $job_id);
           }

        return $rowcount;    
    }

    public function actionInsert_job_applied($user_id , $job_id)
    {
        $model = new SearchForm();
        $rowcount = 0;   
            if ($user_id != '')
           {
            $rowcount = $model->insert_job_applied($user_id , $job_id);
           }
        return $rowcount;    
    }
}
