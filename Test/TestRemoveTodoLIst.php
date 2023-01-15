<?php 

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

addTodoList("Learning PHP");
addTodoList("Learning PHP Database");
addTodoList("Learning PHP OOP");
addTodoList("Learning PHP Laravel");
addTodoList("Learning PHP MVC");

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(1);

showTodoList();