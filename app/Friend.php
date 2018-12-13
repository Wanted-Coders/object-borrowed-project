<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'friends';

    protected $fillable = [
        'name', 'nickname','email','cell_phone'
    ];

    protected $sorted = [
        'name', 'nickname', 'email', 'cell_phone'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];

    protected $hidden = [
        'id'
    ];

    public function address_friends()
    {
        return $this->belongsTo(Friend::class);
    }
    
    public function objectBorroweds()
    {
        return $this->belongsTo(ObjectBorrowed::class);
    }
}
