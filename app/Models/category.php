<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class category extends Model
{
    use HasFactory;
    //defining what to be filled in the db table
    protected $fillable = ['name' , 'added_at'];

    public function product(){
        return  $this->hasMany(products::class , 'category_id' , 'id');
    } 
}
