<?php

namespace App\Models;
use App\DB;

abstract class Model {
   protected static $table;

    public static function all() {
        // This method can be used to fetch all posts if needed
        $db = new \App\DB();
        return $db->all(static::$table, static::class);
    }

    public static function find($id) {
        // This method can be used to fetch all posts if needed
        $db = new \App\DB();
        return $db->find(static::$table, static::class, $id);
    }

    public function save() {
        $db = new \App\DB();
        $fields = get_object_vars($this);
        unset($fields['id']); // Assuming 'id' is auto-incremented and should not be set manually
        $db->insert(static::$table, $fields);
    }
}