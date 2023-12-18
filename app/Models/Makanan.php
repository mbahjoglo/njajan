<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
    protected $table = 'makanan';
    protected $guard = 'id';
    protected $primaryKey = 'id_makanan';

    public function idpasar()
    {
        return $this->belongsTo(Pasar::class, 'id_pasar', 'id_pasar');
    }
}
