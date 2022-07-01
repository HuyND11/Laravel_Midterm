<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable = ['name','price', 'discountPrice', 'image', 'category_id', 'description'];
    public function cars() {
        return $this->beLongsTo(Category::class, 'manufacturer_id', 'id');
    }
    use HasFactory;
}
