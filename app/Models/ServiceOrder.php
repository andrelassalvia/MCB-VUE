<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ServiceOrder extends Model
{
    use HasFactory;

    protected $table = 'service_orders';

    protected $fillable = [
        'client_id',
        'servicetype_id',
        'provider_id',
        'orderstatus_id',
        'classification_id',
        'finish_date',
        'income',
        'cost',
        'tax_rate',
    ];

    protected $casts = [
        'client_id' => 'integer',
        'servicetype_id' => 'integer',
        'provider_id' => 'integer',
        'orderstatus_id' => 'integer',
        'classification_id' => 'integer',
        'finish_date' => 'date',
        'income' => 'float',
        'cost' => 'float',
        'tax_rate' => 'float',
    ];

    // ===== METHODS ===== //
    public function getUpdatedAtAttribute($value)
    {
        if($value) {

            return Carbon::parse($value)->format('d-m-y');
        }
    }

    // ===== RELATIONSHIPS ===== //

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'servicetype_id', 'id');
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class, 'orderstatus_id', 'id');
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id', 'id');
    }
}
