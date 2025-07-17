<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasUuids;

    protected $fillable = [
        "icon",
        "name",
        "description",
        "is_active",
    ];

    public function userServices()
    {
        return $this->hasMany(UserService::class);
    }

    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
