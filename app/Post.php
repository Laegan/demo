<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use FormAccessible;

    public $fillable = [
        'title',
        'body',
        'slug',
        'start_at'
    ];
//
//    protected $dates = ['start_at', "end_date"];
    protected $casts = [
        'start_at' => 'datetime',
        'id' => 'integer'
    ];

    public static $rules = [
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
