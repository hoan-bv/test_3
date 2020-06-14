<?php

use App\Models\Cities;
$vars = [];

$cities = new Cities();
$id = input('id') ?? 0;

if ($id) {
    $city = Cities::findByID($id);
    if ($city) {
        $vars = $city;
    }
}else{
    $vars = Cities::where('cit_parent', '0')->all();
}

return [
    'vars' => $vars
];
