<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostSubject extends Model
{
    protected $table = 'post_subject';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject_id', 'post_id',
    ];
}
