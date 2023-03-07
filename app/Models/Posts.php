<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{

    use HasFactory;

    protected static function boot(){
        parent::boot();
        parent addGlobalScope(new StatusScopes);
    }
}
