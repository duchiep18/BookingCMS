<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;
use App\Models\RoomLevel;
class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = ['id', 'name', 'slug', 'summary', 'description', 'hotel_id', 'hotline', 'price', 'room_level_id', 'image', 'image_list', 'status'];

    public function hotel_info()
    {
        return $this->hasOne('App\Models\Hotel', 'id', 'hotel_id');
    }

    public function room_level_info()
    {
        return $this->hasOne('App\Models\RoomLevel', 'id', 'room_level_id');
    }


}
