<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectBorrowed extends Model
{
    protected $table = 'object_borroweds';

    protected $fillable = [
        'user_id', 'object_id', 'friend_id', 'init_date', 'end_date'
    ];

    protected $sorted = [
        'user_id', 'object_id', 'friend_id', 'init_date', 'end_date'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];

    protected $hidden = [
        'id'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function objects()
    {
        return $this->hasMany(Object::class);
    }
    
    public function friends()
    {
        return $this->hasMany(Friend::class);
    }
}
