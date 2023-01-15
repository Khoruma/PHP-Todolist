<?php

require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList("Learning PHP");
addTodoList("Learning PHP OOP");

viewShowTodoList();

showTodoList();
