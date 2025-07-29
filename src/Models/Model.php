<?php

namespace App\Models;

abstract class Model {
   private static $table;

    public static function all() {
        // This method can be used to fetch all posts if needed
        $db = new \App\DB();
        return $db->all(static::$table, static::class);
    }

}