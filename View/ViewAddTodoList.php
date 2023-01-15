<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewAddTodoList(){

    echo "ADD TODO" . PHP_EOL;

    $todo = input("TODO (3 for canceling)");

    if($todo == "3"){
        echo "Cancel add TODO" . PHP_EOL;
    } else{
        addTodoList($todo);
    }

}