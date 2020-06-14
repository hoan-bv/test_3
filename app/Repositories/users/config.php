<?php
//dd('config usr');
return [
    'users/get_user_by_id' => [
        'title' => 'Lấy chi tiết User từ id',
        'input' => [
            'id' => [
                'title' => 'Lấy Id của user ',
                'rule' => 'integer'
            ]
        ]
    ]
];