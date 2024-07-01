<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";
    protected $fillable = [
        'title',
        'description',
    ];
    public static function all(self):string {
        return 'Title: ' . $instance->title . ', ' . $instance->description;
    }
}
