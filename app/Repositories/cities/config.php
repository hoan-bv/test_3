<?php
//dd('config city');
return [
    'cities/get_by_id' => [
        'title' => 'Lấy chi tiết bài viết từ ID',
        'input' => [
            'id' => [
                'title' => 'Lấy ID city',
                'rule' => 'integer'

            ]
        ]
    ],
    'cities/index' => [
        'title' => 'Lấy danh sách citíe',
        'input' => [

        ]
    ],

];