<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Pivot\PersonTeam;

class Person extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'person_team')
                    ->using(PersonTeam::class);
    }
}
