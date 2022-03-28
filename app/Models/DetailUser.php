<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //ini di off kan saja   
    //use HasFactory; 

    use SoftDeletes;

    public $table = 'detail_user'; //table detail_user

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        ];
    
    
        //memberi tahu ke laravel, field mana saja yang bisa diisi oleh user 
    protected $fillable = [
            'users_id', 
            'photo', 
            'role',
            'contact_number',
            'biography',
            'updated_at',
            'created_at',
            'deleted_at',
            
    ];


}
