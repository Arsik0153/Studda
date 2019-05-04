<?php

include_once ROOT. '/models/Course.php';

class FrontendController{

  public function actionIndex(){

    $courseList = array();
    $courseList = Course::getCourseList("frontend");

    require_once(ROOT . "/views/courses/list.php");

    return true;

  }

}

?>