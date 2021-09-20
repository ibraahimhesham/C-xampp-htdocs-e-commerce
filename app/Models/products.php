<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    //defining what to be filled in the db table
    protected $table = 'products';
    public $timestamps = true;

    protected $casts = [
        'price' => 'float'
    ];

    protected $fillable = [
        'name',
        'description',
        'price',
        "category_id",
        'added_at',
        'image'
    ];

    public function category(){
        return $this->belongsTo(category::class , 'category_id' , 'id');
    }
}
