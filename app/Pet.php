<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [];
    // protected $table = "pet";

    public function owner() {
        return $this->belongsTo('App\Ownser', 'owner_id', 'id');
    }
}
