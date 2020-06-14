<?php

use App\Models\News;

$news = new News();


//$id = input('id') ?? 0;
//$news = $news->findById($id);
$news_per_page = 1;

$page = input('page') ?? 1;
$start = ($page -1) * $news_per_page;

$news_hot = News::where('new_hot', '=', '0')->first();
$news_hot_lv1 = News::where('new_hot', '1')->order_by('new_id', 'RAND')->limit(2)->all();
$news_hot_lv2 = News::where('new_hot', '2')->all();
$news_keys = News::left_join('news_key_words', 'new_id = nek_news_id')
    ->fields('new_id', 'nek_news_id', 'nek_key_id')
    ->all()->toArray();
$news_per_paginate = News::where('new_hot', '2')->limit("$start", "$news_per_page")->all();

return [
    'vars' => [
        'news_hot' => $news_hot,
        'news_hot1' => $news_hot_lv1,
        'news_hot2' => $news_hot_lv2,
        'news_keys' => $news_keys,
        'news_paginate' => $news_per_paginate,
    ]

];