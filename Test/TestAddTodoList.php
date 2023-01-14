<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Learning PHP");
addTodoList("Learning PHP OOP");
addTodoList("Learning PHP Database");
addTodoList("Learning PHP MVC");
addTodoList("Learning PHP Laravel");

var_dump($todoList);