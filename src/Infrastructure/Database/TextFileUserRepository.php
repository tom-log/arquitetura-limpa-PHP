<?php

// TextFileUserRepository.php
class TextFileUserRepository implements UserRepository
{
    private $filePath = 'src/Infrastructure/Database/banco.json';

    public function save(User $user)
    {
        $users = $this->getAllUsers();
        $users[] = [
            'id' => count($users) + 1,
            'name' => $user->getName(),
            'email' => $user->getEmail()
        ];
        file_put_contents($this->filePath, json_encode($users));
    }

    public function deleteById($id)
    {
        $users = $this->getAllUsers();
        $users = array_filter($users, function ($user) use ($id) {
            return $user['id'] !== $id;
        });
        file_put_contents($this->filePath, json_encode($users));
    }

    public function findById($id)
    {
        $users = $this->getAllUsers();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return new User($user['name'], $user['email']);
            }
        }
        return null;
    }

    private function getAllUsers()
    {
        if (!file_exists($this->filePath)) {
            return [];
        }
        return json_decode(file_get_contents($this->filePath), true) ?: [];
    }

    public function listAllUsers()
    {
        return $this->getAllUsers();
    }
}
