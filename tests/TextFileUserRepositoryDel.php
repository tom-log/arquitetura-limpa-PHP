<?php

require_once 'src/Domain/Entities/User.php';
require_once 'src/Application/Repositories/UserRepository.php';
require_once 'src/Infrastructure/Database/TextFileUserRepository.php';

// Instanciar o repositório
$repo = new TextFileUserRepository();

$idUsuario = 1;

// Deletar um usuário pelo ID
$repo->deleteById($idUsuario);

echo "Usuário com ID:{$idUsuario} deletado!\n";
