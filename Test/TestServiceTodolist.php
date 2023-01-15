<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolisServiceImpl;

function testShowTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Learning PHP");
    $todolistRepository->todolist[2] = new Todolist("Learning PHP");
    $todolistRepository->todolist[3] = new Todolist("Learning PHP");

    $todolistService = new TodolisServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function testAddTodoList(): void {
    
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolisServiceImpl($todolistRepository);

    $todolistService->addTodolist("Learning PHP");
    $todolistService->addTodolist("Learning PHP OOP");
    $todolistService->addTodolist("Learning PHP Database");

    $todolistService->showTodolist();
}

function testRemoveTodoList(): void {
    
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolisServiceImpl($todolistRepository);

    $todolistService->addTodolist("Learning PHP");
    $todolistService->addTodolist("Learning PHP OOP");
    $todolistService->addTodolist("Learning PHP Database");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);

    $todolistService->showTodolist();
}

testRemoveTodoList();
