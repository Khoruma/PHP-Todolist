<?php

require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";

addTodoList("Learning PHP");
addTodoList("Learning PHP OOP");

showTodoList();

viewRemoveTodoList();

