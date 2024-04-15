<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['questionnaire_id', 'media_id', 'name'];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
