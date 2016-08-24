<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'type', 'title', 'content', 'status', 'reviewer_id', 'category_id', 'city_id', 'closed',
    ];

    /**
     * Post belongs to a user.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }

    /**
     * Post belongs to a reviewer.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reviewer()
    {
        return $this->belongsTo(App\Models\User::class, 'reviewer_id');
    }

    /**
     * Post belongs to a category.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(App\Models\Category::class);
    }

    /**
     * Post belongs to a city.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(App\Models\City::class);
    }

    /**
     * Post has many comments.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(App\Models\Comments::class);
    }

    /**
     * Post has many reports.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany(App\Models\Report::class);
    }

    /**
     * Post has many reservations.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany(App\Models\Reservation::class);
    }

    /**
     * Post belongs to many subjects.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subjects()
    {
        return $this->belongsToMany(App\Models\Subject::class);
    }

    /**
     * Post has one location.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location()
    {
        return $this->hasOne(App\Models\Location::class);
    }
}
