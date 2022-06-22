<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruduser extends Model
{
    //
    protected $fillable=[
        'name',
        'email',
        'image'
    ];
    public function info()
    {
        return $this->hasOne(Info::class,'user_id','id');
    }

    public function blog()
    {
        return $this->hasMany(blog::class,'user_id','id');
    }
}
