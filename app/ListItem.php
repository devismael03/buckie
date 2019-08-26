<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    public function lists(){
        return $this->belongsToMany(BucketList::class,'item_list');
    }
}
