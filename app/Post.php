<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    //By default if the controller is named Post then table will be named posts
    //In case we need to change the table name we would it using the following:
    protected $table = 'posts';
    //We can also change the primary key field
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    //This means that Post has a relationship to the user and it belongs to the user
    public function user(){
        return $this->belongsTo('App\User');
    }

}
