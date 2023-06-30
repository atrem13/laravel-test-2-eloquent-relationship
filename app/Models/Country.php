<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function teams_size_avg()
    {
        return $this->hasMany(Team::class)->avg('size') ?: 0;
    }
}
