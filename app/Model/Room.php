<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primaryKey = 'room_id';
    public $timestamps = false;

    protected $fillable = [
        'room_id',
        'number_room',
        'view_room',
        'division_id',
        'image',
    ];

    
}
