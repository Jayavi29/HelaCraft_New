<?php

class Product
{
    use Model, Database;

    protected $table = 'products';

    // Columns allowed for insert/update
    protected $allowedColumns = [
        'id',
        'name',
        'description',
        'price',
        'created_at',
        'updated_at'
    ];
}
