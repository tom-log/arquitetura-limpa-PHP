<?php

// RegisterUserUseCase.php
class RegisterUserUseCase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(User $user)
    {
        // Validações, regras de negócio, etc.
        $this->userRepository->save($user);
    }
}
