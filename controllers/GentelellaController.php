<?php

namespace app\controllers;

class GentelellaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPanel(){
    	return $this->render('panel');
    }
    
    public function actionAlert(){
    	return $this->render('alert');
    }
    
    public function actionGridview(){
    	return $this->render('gridview');
    }

    public function actionStatstile(){
    	return $this->render('statstile');
    }

    public function actionTimeline(){
    	return $this->render('timeline');
    }

    public function actionAccordion(){
    	return $this->render('accordion');
    }

}
