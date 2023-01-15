<?php

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";

use Helper\InputHelper;
use Repository\TodolistRepositoryImpl;
use Service\TodolisServiceImpl;
use View\TodolistView;

echo "Todo List App" . PHP_EOL;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolisServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();