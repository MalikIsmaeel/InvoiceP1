<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_city extends Model
{
    use HasFactory;
    protected $fillable =[
        'sub_city_name',
        'description',
        'active',
        'user_id',
        'city_id'];
        public function city(){
            return $this->belongsTo(city::class); 
        }
        public function user(){
            return $this->belongsTo(user::class); 
        }
        
}