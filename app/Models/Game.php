<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Auditable;

class Game extends Model implements AuditableContract
{
    use HasFactory, HasUuids, SoftDeletes, Auditable;

    protected $fillable = [
        'name',
        'description',
        'created_by',
        'last_modified_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function last_modifier()
    {
        return $this->belongsTo(User::class, 'last_modified_by');
    }
}

