<?php
use App\Models\Keywords;


$keys = Keywords::all();
$id = input('id') ?? 1;

$list_keys = Keywords::left_join('news_key_words', 'key_id = nek_key_id')
            ->where("nek_news_id = $id")
            ->fields('key_id', 'key_name')->all();

//foreach ($list_keys as $item) {
//    echo $item->key_name.'<br>';
//}
//dd($list_keys);
return [
'vars' => [
    'keys' => $keys,
    'list_keys' => $list_keys,
]
];