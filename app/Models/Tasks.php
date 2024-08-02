<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $table='tasks';
    protected $primary_key='id';
    public function categories()
    {
        return $this->belongsTo(Categories::class,'category_id', 'id');
    }
}
