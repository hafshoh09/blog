<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
class Post extends Model
{
    use HasFactory;
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
