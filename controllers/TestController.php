<?php

class TestController{

    public function actionShow(){
        echo "test";
        return true;
    }

    public function actionView($id){
        echo "test" . $id;
        return true;
    }

}