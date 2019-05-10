<?php

  class Admin{

    public static function getPageList(){
      $pageList = array();

      $db = Db::getConnection();

      $result = $db->query("SELECT * FROM coursepages");

      $i = 0;

      while($row = $result->fetch()){
        $pageList[$i]["id"] = $row["id"];
        $pageList[$i]["parentId"] = $row["parentId"];
        $pageList[$i]["text"] = $row["text"];
        $i++;
      }

      return $pageList;

    }

    public static function getPage($id){
      $page = array();

      $db = Db::getConnection();

      $result = $db->query("SELECT * FROM coursepages WHERE parentId = " . $id);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $arr = $result->fetch();

      return $arr;
    }

    public static function editPage($text, $id){
      $page = array();

      $db = Db::getConnection();

      $result = $db->query("UPDATE coursepages SET text = '" . $text . "' WHERE id = " . $id);

      

      return $result;
    }

  }

?>