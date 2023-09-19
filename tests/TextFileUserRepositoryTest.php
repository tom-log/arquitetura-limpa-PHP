<?php

require_once 'src/Domain/Entities/User.php';
require_once 'src/Application/Repositories/UserRepository.php';
require_once 'src/Infrastructure/Database/TextFileUserRepository.php';

// Instanciar o repositório
$repo = new TextFileUserRepository();

// Criar e salvar um novo usuário
$user = new User("Weverton", "weverton@email.com");
$repo->save($user);

echo "Usuário salvo com sucesso!\n";
