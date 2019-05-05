<?php

  class Course{

    public static function getCourseList($courseName){
      $courseList = array();

      $db = Db::getConnection();

      $result = $db->query("SELECT * FROM courses WHERE coursename = '". $courseName . "'");

      $i = 0;

      while($row = $result->fetch()){
        $courseList[$i]["id"] = $row["id"];
        $courseList[$i]["coursename"] = $row["coursename"];
        $courseList[$i]["text"] = $row["text"];
        $courseList[$i]["subCourseList"] = self::getSubCourseList($courseName, $row["id"]);
        $i++;
      }

      return $courseList;

    }

    public static function getSubCourseList($courseName, $parentId){
      $subCourseList = array();
      $db = Db::getConnection();

      $result = $db->query("SELECT * FROM subcourse WHERE coursename = '". $courseName . "' AND parentId = " . $parentId);

      $i = 0;

      while($row = $result->fetch()){
        $subCourseList[$i]["id"] = $row["id"];
        $subCourseList[$i]["parentId"] = $row["parentId"];
        $subCourseList[$i]["coursename"] = $row["coursename"];
        $subCourseList[$i]["text"] = $row["text"];
        $i++;
      }

      return $subCourseList;
    }

    public static function getPage($id){
      $page = array();

      $db = Db::getConnection();

      $result = $db->query("SELECT * FROM coursepages WHERE parentId = " . $id);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $arr = $result->fetch();

      return $arr;
    }

  }

?>