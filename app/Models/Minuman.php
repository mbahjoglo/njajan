<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    use HasFactory;
    protected $table = 'minuman';
    protected $guard = 'id';
    protected $primaryKey = 'id_minuman';
}
