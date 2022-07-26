<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientStatus extends Model
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
    protected $table = 'client_statuses';

    // ======= RELATIONSHIPS ========= //

    public function clients()
    {
        return $this->hasMany(Client::class, 'client_status_id', 'id');
    }
}
