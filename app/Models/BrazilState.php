<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrazilState extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code'
    ];

    /**
     * table associated with the model
     */
    protected $table = 'brazil_states';

    // ======= RELATIONSHIPS ========= //
    public function clients()
    {
        return $this->hasMany(Client::class, 'brazilstate_id', 'id');
    }

    public function providers()
    {
        return $this->hasMany(Provider::class, 'brazilstate_id', 'id');
    }

    public function brazilCities()
    {
        return $this->hasMany(BrazilCity::class, 'brazilstate_id', 'id');
    }
}
