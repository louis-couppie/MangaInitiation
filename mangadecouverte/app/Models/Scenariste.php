<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Scenariste extends Model
{
    use HasFactory;

    public function getAll()
    {
        $scenaristes = DB::table('scenariste')->get();
        return $scenaristes;
    }
}
