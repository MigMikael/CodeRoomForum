<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    public $timestamps = true;
    protected $table = 'replies';
    protected $fillable = [
        'topic_id',
        'user_id',
        'content',
    ];

    public function topic()
    {
        return $this->belongsTo('App\Topics', 'topic_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
