<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';

    protected $fillable = ['id', 'name', 'slug', 'summary', 'description', 'location_id', 'image', 'image_list', 'status'];

    public function location_info(){
        return $this->hasOne('App\Models\Location', 'id', 'location_id');
    }
}
