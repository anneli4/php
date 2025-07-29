<?php

namespace App\Models;

class User extends Model {
    protected static $table = 'users'; // Define the table name for this model
    public $id;
    public $email;
    public $password;
}