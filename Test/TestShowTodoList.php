<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

$todoList[1] = "Test PHP TodoList" . PHP_EOL;
$todoList[2] = "Show PHP TodoList" . PHP_EOL;

showTodoList();