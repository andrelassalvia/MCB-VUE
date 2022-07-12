<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrazilCity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'brazilstate_id'
    ];

    /**
     * table associated with the model
     */
    protected $table = 'brazil_cities';

    // ======= RELATIONSHIPS ========= //
    
    public function clients()
    {
        return $this->hasMany(Client::class, 'brazilcity_id', 'id');
    }

    public function brazilState()
    {
        return $this->belongsTo(BrazilState::class, 'brazilstate_id', 'id');
    }

    public function providers()
    {
        return $this->hasMany(Provider::class, 'brazilCity', 'id');
    }
}
