<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'published_at'];
    protected $dates = ['published_at'];

    public function getTitleAttribute($value)
    {
        // 大文字に変換
        return mb_strtoupper($value);

    }


     public function setTitleAttribute($value)
    {
        // 小文字に変換
        $this->attributes['title'] = mb_strtolower($value);
    }

    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

}
