<?php

namespace App\Models;

use App\DB;
use DateTime;

class Post extends Model {
    protected static $table = 'posts';

    public $id;
    public $title;
    public $body;
    public $created;

    public function createdDate() {
        return new DateTime($this->created);
    }

    
}

