<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['skill_type_id', 'name'];
    public function SkillType()
    {
        return $this->belongsTo(SkillType::class);
    }
}
