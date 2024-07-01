<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cabins extends Model
{
    use HasFactory;
    protected $table = 'cabins'; // Table name in the database
    // we use this instead of the following the laravel convetion of pluralizing the class name and using it as the table name

    protected $fillable = [

'title','description','image_path','price','rating','capacity','number_of_rooms','location',
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
