<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';

    protected $primaryKey = 'actor_id';

    public $timestamps = false;

    public function films()
    {
        return $this->belongsToMany(Film::class, 'film_actor');
    }
}
