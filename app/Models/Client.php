<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable = [
        'name', 'slug', 'password',
    ];

    protected $hidden = [];

    public function projects()
    {
        return $this->hasMany(Project::class, 'clients_id', 'id');
    }
}
