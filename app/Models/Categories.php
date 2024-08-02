<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $primary_key='id';
    public function Tasks()
    {
        return $this->hasMany(Task::class,'category_id', 'id');
    }
}
