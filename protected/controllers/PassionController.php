<?php

class PassionController extends Controller {

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return array(

            array('allow', // allow authenticated user to perform these action
                'actions' => array('index'),
                'users' => array('@'),
            ),
            array('allow',
                'actions'=>array('index'),
                'users'=>array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex() {

        $this->render('index');

    }

} 