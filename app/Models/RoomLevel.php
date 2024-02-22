<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomLevel extends Model
{
    use HasFactory;

    protected $table = 'room_level';

    protected $fillable = ['id', 'name', 'slug', 'description', 'status'];

    public static function getAll(){
        return  Category::orderBy('id','DESC')->paginate(10);
    }

}
