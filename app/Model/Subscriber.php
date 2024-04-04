<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'subscriber_id',
        'name',
        'lastname',
        'patronymic',
        'division_id',
        'birthday',
    ];

    // Define the relationship with the Phone model
    public function phones()
    {
        return $this->hasMany(Phone::class, 'subscriber_id', 'subscriber_id');
    }
}



