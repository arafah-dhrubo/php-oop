<?php

class GoodBye{
    const LEAVING_MESSAGE="Thank You for visiting";
    public function bye(){
        echo self::LEAVING_MESSAGE; 
    }
}

echo GoodBye::LEAVING_MESSAGE;

$good_bye=new GoodBye();
$good_bye->bye();

?>