<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
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
    protected $table = 'service_types';

    // ======= RELATIONSHIPS ========= //
    public function serviceOrder()
    {
        return $this->hasMany(ServiceOrder::class, 'servicetype_id', 'id');
    }
}
