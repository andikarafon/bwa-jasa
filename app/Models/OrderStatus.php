<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
  //ini di off kan saja   
    //use HasFactory; 

    use SoftDeletes;

    public $table = 'order_status'; //table 

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        ];
    
    
        //memberi tahu ke laravel, field mana saja yang bisa diisi oleh user 
    protected $fillable = [
            'name', 
            'updated_at',
            'created_at',
            'deleted_at',
            
    ];

    public function order()
    {
            return $this->hasMany('App\Models\Order', 'order_status_id');
    }

}
