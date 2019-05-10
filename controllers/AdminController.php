<?php

include_once ROOT. '/models/Admin.php';

class AdminController{

  public function actionIndex(){

    $pageList = array();
    $pageList = Admin::getPageList();

    require_once(ROOT . "/views/admin/list.php");

    return true;

  }

  public function actionView($id){
    $page = array();

    $page = Admin::getPage($id);

    require_once(ROOT . "/views/admin/page.php");
    return true;
  }

  public function actionEdit($id){
    $pageText = htmlentities($_POST["text"]);
    $page = Admin::editPage($pageText, $id);

    if($page){
      echo "Ok";
    } else{
      echo "Error";
    }
    
    return true;
  }

}

?>