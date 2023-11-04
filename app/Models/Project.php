<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'clients_id', 'name', 'jenis', 'keterangan', 'deadline',
        'status',
        'masaaktif', 'notes',
        'photo',
    ];

    protected $hidden = [];
}
