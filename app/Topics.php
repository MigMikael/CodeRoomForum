<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    public $timestamps = true;
    protected $table = 'topics';
    protected $fillable = [
        'discussion_id',
        'user_id',
        'title',
        'content',
    ];

    public function discussion(){
        return $this->belongsTo('App\Discussions', 'discussion_id');
    }

    public function replies()
    {
        return $this->hasMany('App\Replies', 'topic_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
