<?php
/**
 * Created by vatgia-framework.
 * Date: 8/4/2017
 * Time: 12:55 AM
 */
namespace App\Models;
use VatGia\Model\Model;
use App\Models\Keywords;

class News extends Model
{

    public $table = 'news';
    public $prefix = 'new';


    function keywords() {
        return $this->belongsToMany(
            __FUNCTION__,
            Keywords::class,
            'news_key_words',
            'key_news_id',
            'key_id',
            'nek_news_id',
            'nek_id'


        );
    }
//    public $soft_delete = true;

//    public $connection = 'slaves.web31';
//
//    public function author()
//    {
//        return $this->hasOne('author', Users::class, 'use_id', 'user_id');
//    }
//
//    public function tags()
//    {
//        return $this->belongsToMany(
//            __FUNCTION__,
//            Tags::class
//        );
//    }
}