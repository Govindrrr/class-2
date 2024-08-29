<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    /**
     * Get all of the Admission for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function admission(): HasMany
    {
        return $this->hasMany(Admission::class);
    }
}
