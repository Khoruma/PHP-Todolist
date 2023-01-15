<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList(){


    while (true){

        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Remove Todo" . PHP_EOL;
        echo "3. Exit" . PHP_EOL;

        $choose = input("Chose");

        if($choose == "1"){
            viewAddTodoList();
        } elseif ($choose == "2"){
            viewRemoveTodoList();
        } elseif ($choose == "3"){
            break;
        } else {
            echo  "The Chose is Unidentified" . PHP_EOL;
        }
    }

    echo "Exit Todolist";
}