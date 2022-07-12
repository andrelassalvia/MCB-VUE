<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Occupation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * table associated with the model
     */
    protected $table = 'occupations';

    // ======= RELATIONSHIPS ========= //

    public function clients()
    {
        return $this->hasMany(Client::class, 'occupation_id', 'id');
    }

    // ===== METHODS ===== //

    /**
     * capitalize occupations name
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::ucfirst($value);
    }
}
