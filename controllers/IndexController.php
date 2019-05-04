<?php

class IndexController{

    public function actionIndex(){
        require_once(ROOT . '/views/index/index.php');

		return true;
    }

}