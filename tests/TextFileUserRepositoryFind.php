<?php

require_once 'src/Domain/Entities/User.php';
require_once 'src/Application/Repositories/UserRepository.php';
require_once 'src/Infrastructure/Database/TextFileUserRepository.php';

// Instanciar o repositório
$repo = new TextFileUserRepository();

// Buscar um usuário pelo ID
$foundUser = $repo->findById(1);
if ($foundUser) {
    echo "Usuário encontrado: " . $foundUser->getName() . "\n";
} else {
    echo "Usuário não encontrado.\n";
}
