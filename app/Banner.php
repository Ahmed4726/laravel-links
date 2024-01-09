<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    protected $guarded = [];
    protected $table = 'banners';
    protected $fillable = ['website_link','banner_link','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function visits()
    // {
    //     return $this->hasMany(Visit::class);
    // }

    // public function latest_visit()
    // {
    //     return $this->hasOne(Visit::class)->latest();
    // }

}
