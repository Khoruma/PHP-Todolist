<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolisServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolisServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Learning PHP");
    $todolistService->addTodolist("Learning PHP OOP");
    $todolistService->addTodolist("Learning PHP Database");

    $todolistView->showTodolist();

}

function testViewAddTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolisServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Learning PHP");
    $todolistService->addTodolist("Learning PHP OOP");
    $todolistService->addTodolist("Learning PHP Database");

    $todolistService->showTodolist();

    $todolistView->addTodolist();

    $todolistService->showTodolist();

}

testViewAddTodolist();
