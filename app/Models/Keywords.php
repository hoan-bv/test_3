<?php
namespace App\Models;
use VatGia\Model\Model;
use App\Models\News;


class Keywords extends Model
{
    public $table = 'keywords';
    public $prefix = 'key';

    function news () {

        $this->belongsToMany(
            __FUNCTION__,
            News::class,
            'news_key_words',
            'key_news_id',
            'news_id',
            'nek_key_id',
            'nek_id'

        );
}
}