<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

$todoList[1] = "Test PHP TodoList" . PHP_EOL;
$todoList[2] = "Show PHP TodoList" . PHP_EOL;

showTodoList();