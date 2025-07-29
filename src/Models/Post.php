<?php

namespace App\Models;

use DateTime;

class Post extends Model {
    protected static $table = 'posts'; // Define the table name for this model

    public $id;
    public $title;
    public $body;
    public $created;

    public function createdDate() {
        return new DateTime($this->created);
    }

}