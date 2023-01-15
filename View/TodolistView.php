<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodolistService;

    class TodolistView
    {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {

                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Add Todo" . PHP_EOL;
                echo "2. Remove Todo" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;

                $choose = InputHelper::input("Choose");

                if ($choose == "1") {
                    $this->addTodolist();
                } elseif ($choose == "2") {
                    $this->removeTodolist();
                } elseif ($choose == "x") {
                    break;
                } else {
                    echo  "The Chose is Unidentified" . PHP_EOL;
                }
            }

            echo "Exit Todolist";
        }

        function addTodolist(): void
        {

            echo "ADD TODO" . PHP_EOL;

            $todo = InputHelper::input("TODO (x for canceling)");

            if ($todo == "x") {
                echo "Cancel add TODO" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "REMOVE TODO" . PHP_EOL;

            $chose = InputHelper::input("Chose Number (x for cancel)");
        
            if($chose == "x"){
                echo "Cancel add TODO" . PHP_EOL;
            } else{
                $this->todolistService->removeTodolist($chose);
            }
        }
    }
}
