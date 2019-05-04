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
        $i++;
      }

      return $courseList;

    }

  }

?>