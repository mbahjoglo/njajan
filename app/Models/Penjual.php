<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    protected $table = 'penjual';
    protected $guard = 'id';
    protected $primaryKey = 'id_penjual';
}
