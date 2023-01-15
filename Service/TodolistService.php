<?php

namespace Service {
use Entity\Todolist;
use Repository\TodoListRepository;

    interface TodolistService
    {

        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolisServiceImpl implements TodolistService
    {

        private TodoListRepository $todolistRepository;

        public function __construct(TodoListRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        public function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
        
            foreach($this->todolistRepository->findALl() as $number => $value){
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }

        public function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "Success Add Todolist" . PHP_EOL;
        }

        public function removeTodolist(int $number): void
        {
            if($this->todolistRepository->remove($number)){
                echo "Success Delete Todolist" . PHP_EOL;
            } else {
                echo "Failed Delete Todolist" . PHP_EOL;
            }
        }
    }
}
