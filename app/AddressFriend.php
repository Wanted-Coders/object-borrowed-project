<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressFriend extends Model
{
    protected $table = 'address_friends';

    protected $fillable = [
        'friend_id', 'public_place', 'neighborthood','city', 'state', 'number', 'complement'
    ];

    protected $sorted = [
        'friend_id', 'public_place', 'neighborthood', 'city', 'state', 'number', 'complement'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];

    protected $hidden = [
        
    ];

    public function friends()
    {
        return $this->hasOne(Friend::class);
    }
}
