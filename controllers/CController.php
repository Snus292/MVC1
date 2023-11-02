<?php


require_once ("models/CModel_db.php");
require_once ("views/CView.php");
require_once("config/db_config.php"); 



class CController {
    public $model;
    public $view;
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function SetMainPage () {
        // объект соединения $db в модель
        $model = new CModel_db($this->db); 
        $resultModel = $model->GetData();


        // $view = new CView();
        // $resultView = $view-ViewMainPage();
    
        return $resultModel;
    }
}