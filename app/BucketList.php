<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BucketList extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function items(){
        return $this->belongsToMany(ListItem::class,'item_list');
    }
}
