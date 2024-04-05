<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $table = 'divisions';
    protected $primaryKey = 'division_id';
    public $timestamps = false;

    protected $fillable = [
        'division_id',
        'name_division',
        'view_division'
    ];
}
