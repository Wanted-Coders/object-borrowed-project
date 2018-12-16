<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Object extends Model
{   
    protected $table = 'objects';

    protected $fillable = [
        'user_id' ,'name'
    ];
    
    protected $sorted = [
        'user_id', 'name'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];

    protected $hidden = [
        
    ];

    public function users() 
    {
        return $this->belongsTo(User::class);
    }

}
