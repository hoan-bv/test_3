<?php

use App\Models\Cities;
$vars = [];

$model = new Cities();
$parent_id = input('parent_id') ?? 0;

if ($parent_id) {
    $model->where('cit_parent = ' . (int)$parent_id);
} else {
    $model->where('cit_parent = 0');
}

$cities = $model->all();
if ($cities) {
    $vars = $cities;
}

return [
    'vars' => $vars
];
