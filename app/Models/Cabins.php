<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabins extends Model
{
    protected $table = 'cabins'; // Adjust table name as needed

    protected $fillable = [
        'title',
'description','image_path','price','rating','capacity','room_type','location',







    ];

    // Accessor to retrieve the full image URL
    public function getImageUrlAttribute()
    {
        return $this->image_path ? asset('storage/' . $this->image_path) : null;
    }
    public function getInfo()
{
    return 'ID: ' . $this->id . ', Title: ' . $this->title . ', ' . $this->description . ', Price: ' . $this->price . ', Rating: ' . $this->rating . ', Capacity: ' . $this->capacity . ', Room Type: ' . $this->room_type . ', Location: ' . $this->location . ', Image: ' . $this->image_path;
    }
}
