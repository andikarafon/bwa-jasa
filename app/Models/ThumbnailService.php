<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThumbnailService extends Model
{
    //ini di off kan saja   
    //use HasFactory; 

    use SoftDeletes;

    public $table = 'thumbnail_Service'; //table 

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        ];
    
    
        //memberi tahu ke laravel, field mana saja yang bisa diisi oleh user 
    protected $fillable = [
        'service_id', 
        'thumbnail', 
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }
    
}
