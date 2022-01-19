<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laravelTopic extends Model
{
    //
    protected $fillable=[
        'topic_name',
        'topic_dis',

    ];
    //accessor
    function gettopicnameattribute($value){
        return ucfirst($value);
    }
    
    
    function gettopicdisattribute($value){
        return lcfirst($value);
    }
    //mutator
    function settopicdisattribute($value){
        return $this->attributes["topic_dis"] =  "It is used to ".$value;
    }

    //relations one to one ,one to many ka b same hna 
    // function table1Name($value){
    //     return $this->hasOne('App\model2name');
    // }
}
