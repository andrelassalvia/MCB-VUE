<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
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
    protected $table = 'order_statuses';

    // ======= RELATIONSHIPS ========= //
    public function serviceOrders()
    {
        return $this->hasMany(ServiceOrder::class, 'orderstatus_id', 'id');
    }
}
