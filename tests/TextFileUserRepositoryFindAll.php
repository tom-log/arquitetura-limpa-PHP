<?php

require_once 'src/Domain/Entities/User.php';
require_once 'src/Application/Repositories/UserRepository.php';
require_once 'src/Infrastructure/Database/TextFileUserRepository.php';

// Instanciar o repositório
$repo = new TextFileUserRepository();

// Continuando do código anterior...

// Como o método getAllUsers é privado, não podemos chamá-lo diretamente.
// Mas, podemos criar um novo método público no TextFileUserRepository para testar:

// Testar a listagem de todos os usuários
$allUsers = $repo->listAllUsers();
foreach ($allUsers as $user) {
    echo "ID: " . $user['id'] . ", Nome: " . $user['name'] . ", Email: " . $user['email'] . "\n";
}
