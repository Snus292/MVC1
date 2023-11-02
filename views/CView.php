<?php

require_once ("controllers/CController.php");

class CView {
    private $controller;

    public function __construct($db) {
        $this->controller = new CController($db);
    }
    public function ViewMainPage () {
        $arrayResult = $this->controller->SetMainPage();
        include "views/view_mainPage.php";
        return $arrayResult;
    }

    public function GetHeader() {
        return "views/header.php";
    }

    public function  GetFooter () {
        return "views/footer.php";
    }
}