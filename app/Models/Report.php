<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'post_id', 'report_type_id', 'description', 'status',
    ];

    /**
     * Report belongs to a user.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Report belongs to a post.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    /**
     * Report belongs to a report type.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reportType()
    {
        return $this->belongsTo('App\Models\ReportType');
    }
}
