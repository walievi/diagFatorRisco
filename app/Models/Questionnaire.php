<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pivot\QuestionnaireTeam;

class Questionnaire extends Model
{
    protected $fillable = ['name'];

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'questionnaire_team')
                    ->using(QuestionnaireTeam::class);
    }
}
