<?php

// UserRepository.php
interface UserRepository
{
    public function save(User $user);
    public function findById($id);
}
