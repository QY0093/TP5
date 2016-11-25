<?php

namespace backend\controllers;

class IndexController extends AdminbaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
