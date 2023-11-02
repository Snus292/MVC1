<?php

require_once ("views/CView.php");
require_once ("controllers/CController.php");
require_once ("config/db_config.php");

$view = new CView();
$controller = new CController();

$pageHeader = $view->GetHeader();
$pageBody = $view->ViewMainPage();
$pageFooter = $view->GetFooter();

include ($pageHeader);
$pageData = $view->ViewMainPage();
//include($pageBody)
include ($pageFooter);