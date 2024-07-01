<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public int $id;
    public string $title;
    public string $body;
    public string $author;
    public string $created_at;
    public string $updated_at;

public function getId():int {
return $this->id;
}


}
