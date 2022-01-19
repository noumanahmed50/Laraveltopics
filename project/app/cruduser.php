<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruduser extends Model
{
    //
    protected $fillable=[
        'name',
        'email',
        'phone'];
}
