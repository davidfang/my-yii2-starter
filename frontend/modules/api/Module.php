<?php

namespace frontend\modules\api;

use Yii;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        Yii::$app->response->format =  \yii\web\Response::FORMAT_JSON;
        Yii::$app->params['return_error'] = ['status'=>false,'msg'=>'接口请求失败'];
        Yii::$app->params['return_success'] = ['status'=>true,'msg'=>'接口请求成功','data'=>[]];
    }
}
