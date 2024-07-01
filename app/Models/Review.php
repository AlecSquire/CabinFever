<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Review extends Model
{
    use HasFactory;
    protected $table = "review_post";

    protected $fillable = [
        'userName',
        'title',
        'body',
        'rating'
    ];
public static function getReview(): string {
    return self::all();
}


}
