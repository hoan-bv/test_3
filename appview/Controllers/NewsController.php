<?php


namespace AppView\Controllers;
use VatGia\ControllerBase;

class NewsController extends ControllerBase
{
    function render_news(){
        // Lấy bài viết đầu trang
        $data_news_0 = model('news/get_news_id')->load()['vars']['news_hot'];
        // Lấy 2 bài viết đầu trang
        $data_news_1 = model('news/get_news_id')->load()['vars']['news_hot1'];
        // Lấy bài viết giữa trang
        $data_news_2 = model('news/get_news_id')->load()['vars']['news_hot2'];
         // Lấy keywords theo bài viết
        $data_keywords = model('key_words/get_key_words_by_id')->load(
            [ 'id'  => 1]
        )['vars']['list_keys'];

        $data = view('wepay/vay-von')->render([
            'news' => $data_news_0,
            'new_hot1' => $data_news_1,
            'new_hot2' => $data_news_2,
            'key_words' => $data_keywords,
        ]);

        return view('wepay/master/master')->render([
            'dataShow' => $data,
        ]);
    }
    function getMoreNews() {
        $this->disableDebugBar();

        $page = getValue('page', 'int', 'GET', 1);
        $data_news = model('news/get_news_id')->load([
            'page' => (int)$page,
        ]);


        return json_encode([
            'data' => $data_news['vars']['news_paginate']->toArray()
        ]);


    }
}