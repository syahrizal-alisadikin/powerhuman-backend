<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "name",
        "company_id"
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function responsbility()
    {
        return $this->hasMany(Responsibility::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
