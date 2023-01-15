<?php 

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
function viewRemoveTodoList(){

    echo "REMOVE TODO" . PHP_EOL;

    $chose = input("Chose Number (3 for cancel)");

    if($chose == "3"){
        echo "Cancel add TODO" . PHP_EOL;
    } else{
        $successs = removeTodoList($chose);

        if($successs){
            echo "TODO $chose Removed" . PHP_EOL;
        } else{
            echo "Can't Delete TODO $chose" . PHP_EOL;
        }
    }

}