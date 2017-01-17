<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussions extends Model
{
    public $timestamps = true;
    protected $table = 'discussions';
    protected $fillable = [
        'forum_id',
        'title',
        'description'
    ];

    public function forum(){
        return $this->belongsTo('App\Forums', 'forum_id');
    }

    public function topics(){
        return $this->hasMany('App\Topics');
    }
}
