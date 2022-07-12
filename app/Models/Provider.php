<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'contact',
        'tel',
        'email',
        'zap',
        'brazilstate_id',
        'brazilcity_id'
    ];

    /**
     * table associated with the model
     */
    protected $table = 'providers';

    // ======= RELATIONSHIPS ========= //
    public function serviceOrders()
    {
        return $this->hasMany(ServiceOrder::class, 'provider_id', 'id');
    }

    public function brazilState()
    {
        return $this->belongsTo(BrazilState::class, 'brazilstate_id', 'id');
    }

    public function brazilCity()
    {
        return $this->belongsTo(BrazilCity::class, 'brazilcity_id', 'id');
    }
}
