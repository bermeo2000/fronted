<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    use HasFactory;
    protected $table= 'provincia';
    public $timestamps = false;
    protected $fillable = [
        'tipo_provincia',
        'eliminado'
    ];
}
