<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class News extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_az', 'title_en', 'title_ru' ,'content_az', 'content_en', 'content_ru', 'photo', 'category', 'active'
    ];

    protected $appends = [
      'category'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function category(){
      return $this->hasOne('App\News_category');
    }

    public function getCategoryAttr(){
      return News_category::where('id', $this->category)->first()->name;
    }

}
