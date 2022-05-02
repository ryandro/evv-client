<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use \App\Models\User;

class Gamelist extends Model
{
    use HasFactory;

    public $timestamps = true;
    
    protected $table = 'gamelist';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'type', 'provider', 'gamename', 'id_hash', 'id_parent', 'id_hash_parent', 'updated_at', 'created_at',
    ];

}

