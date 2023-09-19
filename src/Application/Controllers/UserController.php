<?php

// UserController.php
class UserController
{
    private $registerUserUseCase;

    public function __construct(RegisterUserUseCase $registerUserUseCase)
    {
        $this->registerUserUseCase = $registerUserUseCase;
    }

    public function register()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $user = new User($name, $email);
        $this->registerUserUseCase->execute($user);

        // Retornar uma resposta para o usuário...
    }
}
