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

        $global_tags = GlobalTag::model()->findAll(array("select"=>"id, global_tag_name, tag_frequency"));

        $this->render('index', array('tags_global'=>$global_tags));

    }

} 