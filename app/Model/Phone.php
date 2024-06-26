<?php
namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'phone_number',
        'room_id',
        'subscriber_id'
    ];
    
    
    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class, 'subscriber_id', 'subscriber_id');
    }
    
    

}
