<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    public $timestamps = true;
    protected $table = 'forums';
    protected $fillable = [
        'title'
    ];

    public function discussions(){
        return $this->hasMany('App\Discussions', 'forum_id');
    }
}
