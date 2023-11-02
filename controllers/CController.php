<?php


require_once ("models/CModel_db.php");
require_once ("views/CView.php");
require_once("db_config.php");



class CController {
    public $model;
    public $view;

    public function SetMainPage () {
        $model = new CModel_db($db);
        $resultModel = $model->GetData();

        // $view = new CView();
        // $resultView = $view-ViewMainPage();
    
        return $resultModel;
    }
}