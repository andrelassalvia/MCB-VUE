<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
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
    protected $table = 'classifications';

    // ======= RELATIONSHIPS ========= //
    public function serviceOrders()
    {
        return $this->hasMany(ServiceOrder::class, 'classification_id', 'id');
    }
}
