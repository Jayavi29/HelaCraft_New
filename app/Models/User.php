<?php

class User
{
    use Model, Database;

    protected $table = 'users';

    // Columns allowed for insert/update
    protected $allowedColumns = [
        'id',
        'username',
        'email',
        'password',
        'created_at',
        'updated_at'
    ];
}
