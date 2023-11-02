<?php

require_once ("views/CView.php");
require_once ("controllers/CController.php");
require_once ("config/db_config.php");

$view = new CView($db);
$controller = new CController($db);

$pageHeader = $view->GetHeader();
$pageBody = $view->ViewMainPage();
$pageFooter = $view->GetFooter();

// $pageData = $view->ViewMainPage();

include ($pageHeader);
//include($pageBody)
include ($pageFooter);