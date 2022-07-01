<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];
    public function cars() {
        return $this->hasMany(Food::class, 'category_id', 'id');
    }
    use HasFactory;
}
