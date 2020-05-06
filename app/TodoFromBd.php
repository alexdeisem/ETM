<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TodoFromBd extends Model
{

    public $tasks;

    static function gettask()
    {
        return $tasks = DB::table('tasks')->get();
    }
}
