<?php

include_once ROOT. '/models/Course.php';

class FrontendController{

  public function actionIndex(){

    $courseList = array();
    $courseList = Course::getCourseList("frontend");

    require_once(ROOT . "/views/courses/list.php");

    return true;

  }

  public function actionView($id){
    $coursePage = array();

    $page = Course::getPage($id);

    require_once(ROOT . "/views/courses/page.php");
    return true;
  }

}

?>